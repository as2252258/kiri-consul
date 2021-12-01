<?php

namespace Kiri\Consul;

use Http\Client\Client;
use Http\Message\Stream;
use Kiri\Abstracts\Config;
use Kiri\Exception\ConfigException;

abstract class AbstractConsul
{

	public string $token = '';


	public string $host = '';


	public string $_query = '';


	public int $port = 8500;


	const GET = 'get';
	const PUT = 'put';
	const DELETE = 'delete';
	const POST = 'post';


	/**
	 * @throws ConfigException
	 */
	public function init()
	{
		$config = Config::get('consul', null, true);

		$this->host = $config['address']['host'];
		$this->port = $config['address']['port'];

		$this->token = $config['token'];
	}


	/**
	 * @param string $query
	 * @return AbstractConsul
	 */
	public function setQuery(string $query): static
	{
		$this->_query = $query;
		return $this;
	}


	/**
	 * @param $path
	 * @param $method
	 * @param mixed $data
	 * @return Client
	 */
	protected function request($path, $method, mixed $data = []): Client
	{
		$client = new Client($this->host, $this->port);
		$client->withConnectTimeout(60)
			->withContentType('application/json')
			->withHeaders(['X-AbstractConsul-Token' => $this->token])
			->withTimeout(60)
			->withBody(new Stream(json_encode($data)));
		if (!empty($this->_query)) {
			$path .= '?' . $this->_query;
		}
		match ($method) {
			self::GET => $client->get($path),
			self::POST => $client->post($path),
			self::PUT => $client->put($path),
			self::DELETE => $client->delete($path),
		};
		$client->close();
		return $client;
	}


}