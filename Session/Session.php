<?php

namespace Kiri\Consul\Session;


use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Session extends AbstractConsul
{


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function put($data): AsyncClient
	{
		return $this->request('/v1/session/create', self::PUT, $data);
	}


	/**
	 * @param $uuid
	 * @param $data
	 * @return AsyncClient
	 */
	public function put_destroy($uuid, $data): AsyncClient
	{
		return $this->request('/v1/session/destroy/' . $uuid, self::PUT, $data);
	}


	/**
	 * @param $uuid
	 * @return AsyncClient
	 */
	public function info($uuid): AsyncClient
	{
		return $this->request('/v1/session/info/' . $uuid, self::GET);
	}


	/**
	 * @param $uuid
	 * @return AsyncClient
	 */
	public function node($uuid): AsyncClient
	{
		return $this->request('/v1/session/node/' . $uuid, self::GET);
	}


	/**
	 * @return AsyncClient
	 */
	public function list(): AsyncClient
	{
		return $this->request('/v1/session/list', self::GET);
	}


	/**
	 * @param $uuid
	 * @return AsyncClient
	 */
	public function renew($uuid): AsyncClient
	{
		return $this->request('/v1/session/renew/' . $uuid, self::PUT);
	}

}
