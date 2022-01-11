<?php

namespace Kiri\Consul;

use Kiri\Client;

class KVStore extends AbstractConsul
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
