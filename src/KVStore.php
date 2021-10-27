<?php

namespace Kiri\Consul;

use Psr\Http\Message\ResponseInterface;

class KVStore extends Consul
{


	/**
	 * @param $key
	 * @return ResponseInterface
	 */
	public function get($key): ResponseInterface
	{
		return $this->request('/v1/kv/' . $key, self::GET);
	}


	/**
	 * @param $key
	 * @param $value
	 * @return ResponseInterface
	 */
	public function put($key, $value): ResponseInterface
	{
		return $this->request('/v1/kv/' . $key, self::PUT, $value);
	}


	/**
	 * @param $key
	 * @return ResponseInterface
	 */
	public function delete($key): ResponseInterface
	{
		return $this->request('/v1/kv/' . $key, self::DELETE);
	}


}
