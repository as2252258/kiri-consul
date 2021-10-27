<?php

namespace Kiri\Consul;

use Psr\Http\Message\ResponseInterface;

class Config extends Consul
{


	/**
	 * @param $data
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/config
	 */
	public function config($data): ResponseInterface
	{
		return $this->request('/v1/config', self::PUT, $data);
	}


	/**
	 * @param $kind
	 * @param $name
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/config
	 */
	public function get($kind, $name): ResponseInterface
	{
		return $this->request('/v1/config/' . $kind . '/' . $name, self::GET);
	}


	/**
	 * @param $kind
	 * @param $name
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/config
	 */
	public function delete($kind, $name): ResponseInterface
	{
		return $this->request('/v1/config/' . $kind . '/' . $name, self::DELETE);
	}


	/**
	 * @param $kind
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/config
	 */
	public function get_kind($kind): ResponseInterface
	{
		return $this->request('/v1/config/' . $kind , self::GET);
	}

}
