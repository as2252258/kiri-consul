<?php

namespace Kiri\Consul;

use Http\Client\Client;
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


	/**
	 * @param $path
	 * @param $method
	 * @param mixed $data
	 * @return ResponseInterface
	 */
	public function request($path, $method, mixed $data = []): ResponseInterface
	{
		$client = new Client($this->host, $this->port);
		$client->withConnectTimeout(60)
			->withHeader(['Content-Type' => 'application/json'])
			->withTimeout(60);
		return match ($method) {
			self::GET => $client->get($path, $data),
			self::POST => $client->post($path, $data),
			self::PUT => $client->put($path, $data),
			self::DELETE => $client->delete($path, $data),
		};
	}


}
