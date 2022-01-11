<?php

namespace Kiri\Consul;

use Kiri\AsyncClient;
use Kiri\Message\Stream;
use Kiri\Abstracts\Config;
use Kiri\Exception\ConfigException;

abstract class AbstractConsul
{

	public string $token = '';


	public string $host = '';


	public string $_query = '';


	public int $port = 8500;


	public bool $isSsl = false;


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

		$this->isSsl = $config['address']['isSsl'];

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
	 * @return AsyncClient
	 */
	protected function request($path, $method, mixed $data = []): AsyncClient
	{
		$client = new AsyncClient($this->host, $this->port, $this->isSsl);
		$client->withConnectTimeout(60)
			->withContentType('application/json')
			->withHeaders(['X-Consul-Token' => $this->token])
			->withTimeout(60)
			->withBody(new Stream(json_encode($data, JSON_UNESCAPED_UNICODE)));
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
