<?php

namespace Kiri\Consul;

use Http\Client\Client;
use Kiri\Abstracts\Config;
use Psr\Http\Message\ResponseInterface;

abstract class Consul
{

	public string $token = '';


	public string $host = '';


	public int $port = 8500;


	const GET = 'get';
	const PUT = 'put';
	const DELETE = 'delete';
	const POST = 'post';


	public function init()
	{
		$config = Config::get('rpc.registry', null, true);

		$this->host = $config['address']['host'];
		$this->port = $config['address']['port'];

		$this->token = $config['token'];
	}


	/**
	 * @param $path
	 * @param $method
	 * @param mixed $data
	 * @return ResponseInterface
	 */
	protected function request($path, $method, mixed $data = []): ResponseInterface
	{
		$client = new Client($this->host, $this->port);
		$client->withConnectTimeout(60)
			->withHeader(['Content-Type' => 'application/json'])
			->withTimeout(60);
		return match ($method) {
			self::GET => $client->get($path, $data),
			self::POST => $client->post($path, json_encode($data)),
			self::PUT => $client->put($path, json_encode($data)),
			self::DELETE => $client->delete($path, json_encode($data)),
		};
	}


}
