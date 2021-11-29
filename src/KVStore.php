<?php

namespace Kiri\Consul;

use Http\Client\Client;

class KVStore extends Consul
{


	/**
	 * @param $key
	 * @return Client
	 */
	public function get($key): Client
	{
		return $this->request('/v1/kv/' . $key, self::GET);
	}


	/**
	 * @param $key
	 * @param $value
	 * @return Client
	 */
	public function put($key, $value): Client
	{
		return $this->request('/v1/kv/' . $key, self::PUT, $value);
	}


	/**
	 * @param $key
	 * @return Client
	 */
	public function delete($key): Client
	{
		return $this->request('/v1/kv/' . $key, self::DELETE);
	}


}
