<?php

namespace Kiri\Consul;

use Kiri\AsyncClient;

class KVStore extends AbstractConsul
{


	/**
	 * @param $key
	 * @return AsyncClient
	 */
	public function get($key): AsyncClient
	{
		return $this->request('/v1/kv/' . $key, self::GET);
	}


	/**
	 * @param $key
	 * @param $value
	 * @return AsyncClient
	 */
	public function put($key, $value): AsyncClient
	{
		return $this->request('/v1/kv/' . $key, self::PUT, $value);
	}


	/**
	 * @param $key
	 * @return AsyncClient
	 */
	public function delete($key): AsyncClient
	{
		return $this->request('/v1/kv/' . $key, self::DELETE);
	}


}
