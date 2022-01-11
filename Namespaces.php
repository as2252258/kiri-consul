<?php

namespace Kiri\Consul;

use Kiri\AsyncClient;

class Namespaces extends AbstractConsul
{


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function put($data): AsyncClient
	{
		return $this->request('/v1/namespace', self::PUT, $data);
	}


	/**
	 * @param $name
	 * @param $data
	 * @return AsyncClient
	 */
	public function update($name, $data): AsyncClient
	{
		return $this->request('/v1/namespace/' . $name, self::PUT, $data);
	}


	/**
	 * @param $key
	 * @return AsyncClient
	 */
	public function get($key): AsyncClient
	{
		return $this->request('/v1/namespace/' . $key, self::GET);
	}


	/**
	 * @return AsyncClient
	 */
	public function list(): AsyncClient
	{
		return $this->request('/v1/namespaces', self::GET);
	}


	/**
	 * @param $key
	 * @return AsyncClient
	 */
	public function delete($key): AsyncClient
	{
		return $this->request('/v1/namespace/' . $key, self::DELETE);
	}


}
