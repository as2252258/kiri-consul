<?php

namespace Kiri\Consul;

use Http\Client\Client;

class Namespaces extends AbstractConsul
{


	/**
	 * @param $data
	 * @return Client
	 */
	public function put($data): Client
	{
		return $this->request('/v1/namespace', self::PUT, $data);
	}


	/**
	 * @param $name
	 * @param $data
	 * @return Client
	 */
	public function update($name, $data): Client
	{
		return $this->request('/v1/namespace/' . $name, self::PUT, $data);
	}


	/**
	 * @param $key
	 * @return Client
	 */
	public function get($key): Client
	{
		return $this->request('/v1/namespace/' . $key, self::GET);
	}


	/**
	 * @return Client
	 */
	public function list(): Client
	{
		return $this->request('/v1/namespaces', self::GET);
	}


	/**
	 * @param $key
	 * @return Client
	 */
	public function delete($key): Client
	{
		return $this->request('/v1/namespace/' . $key, self::DELETE);
	}


}
