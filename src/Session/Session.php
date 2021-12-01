<?php

namespace Kiri\Consul\Session;


use Kiri\Consul\AbstractConsul;
use Http\Client\Client;

class Session extends AbstractConsul
{


	/**
	 * @param $data
	 * @return Client
	 */
	public function put($data): Client
	{
		return $this->request('/v1/session/create', self::PUT, $data);
	}


	/**
	 * @param $uuid
	 * @param $data
	 * @return Client
	 */
	public function put_destroy($uuid, $data): Client
	{
		return $this->request('/v1/session/destroy/' . $uuid, self::PUT, $data);
	}


	/**
	 * @param $uuid
	 * @return Client
	 */
	public function info($uuid): Client
	{
		return $this->request('/v1/session/info/' . $uuid, self::GET);
	}


	/**
	 * @param $uuid
	 * @return Client
	 */
	public function node($uuid): Client
	{
		return $this->request('/v1/session/node/' . $uuid, self::GET);
	}


	/**
	 * @return Client
	 */
	public function list(): Client
	{
		return $this->request('/v1/session/list', self::GET);
	}


	/**
	 * @param $uuid
	 * @return Client
	 */
	public function renew($uuid): Client
	{
		return $this->request('/v1/session/renew/' . $uuid, self::PUT);
	}

}
