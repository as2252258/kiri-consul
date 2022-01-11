<?php

namespace Kiri\Consul;

use Kiri\AsyncClient;

class Config extends AbstractConsul
{


	/**
	 * @param $data
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/config
	 */
	public function config($data): AsyncClient
	{
		return $this->request('/v1/config', self::PUT, $data);
	}


	/**
	 * @param $kind
	 * @param $name
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/config
	 */
	public function get($kind, $name): AsyncClient
	{
		return $this->request('/v1/config/' . $kind . '/' . $name, self::GET);
	}


	/**
	 * @param $kind
	 * @param $name
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/config
	 */
	public function delete($kind, $name): AsyncClient
	{
		return $this->request('/v1/config/' . $kind . '/' . $name, self::DELETE);
	}


	/**
	 * @param $kind
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/config
	 */
	public function get_kind($kind): AsyncClient
	{
		return $this->request('/v1/config/' . $kind , self::GET);
	}

}
