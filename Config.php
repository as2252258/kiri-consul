<?php

namespace Kiri\Consul;

use Http\Client\Client;

class Config extends AbstractConsul
{


	/**
	 * @param $data
	 * @return Client
	 * @see https://www.consul.io/api-docs/config
	 */
	public function config($data): Client
	{
		return $this->request('/v1/config', self::PUT, $data);
	}


	/**
	 * @param $kind
	 * @param $name
	 * @return Client
	 * @see https://www.consul.io/api-docs/config
	 */
	public function get($kind, $name): Client
	{
		return $this->request('/v1/config/' . $kind . '/' . $name, self::GET);
	}


	/**
	 * @param $kind
	 * @param $name
	 * @return Client
	 * @see https://www.consul.io/api-docs/config
	 */
	public function delete($kind, $name): Client
	{
		return $this->request('/v1/config/' . $kind . '/' . $name, self::DELETE);
	}


	/**
	 * @param $kind
	 * @return Client
	 * @see https://www.consul.io/api-docs/config
	 */
	public function get_kind($kind): Client
	{
		return $this->request('/v1/config/' . $kind , self::GET);
	}

}
