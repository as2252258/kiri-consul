<?php

namespace Kiri\Consul;

use Psr\Http\Message\ResponseInterface;

class Namespaces extends Consul
{


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put($data): ResponseInterface
	{
		return $this->request('/v1/namespace', self::PUT, $data);
	}


	/**
	 * @param $name
	 * @param $data
	 * @return ResponseInterface
	 */
	public function update($name, $data): ResponseInterface
	{
		return $this->request('/v1/namespace/' . $name, self::PUT, $data);
	}


	/**
	 * @param $key
	 * @return ResponseInterface
	 */
	public function get($key): ResponseInterface
	{
		return $this->request('/v1/namespace/' . $key, self::GET);
	}


	/**
	 * @return ResponseInterface
	 */
	public function list(): ResponseInterface
	{
		return $this->request('/v1/namespaces', self::GET);
	}


	/**
	 * @param $key
	 * @return ResponseInterface
	 */
	public function delete($key): ResponseInterface
	{
		return $this->request('/v1/namespace/' . $key, self::DELETE);
	}


}
