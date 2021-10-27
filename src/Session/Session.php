<?php

namespace Kiri\Consul\Session;


use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Session extends Consul
{


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put($data): ResponseInterface
	{
		return $this->request('/v1/session/create', self::PUT, $data);
	}


	/**
	 * @param $uuid
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put_destroy($uuid, $data): ResponseInterface
	{
		return $this->request('/v1/session/destroy/' . $uuid, self::PUT, $data);
	}


	/**
	 * @param $uuid
	 * @return ResponseInterface
	 */
	public function info($uuid): ResponseInterface
	{
		return $this->request('/v1/session/info/' . $uuid, self::GET);
	}


	/**
	 * @param $uuid
	 * @return ResponseInterface
	 */
	public function node($uuid): ResponseInterface
	{
		return $this->request('/v1/session/node/' . $uuid, self::GET);
	}


	/**
	 * @return ResponseInterface
	 */
	public function list(): ResponseInterface
	{
		return $this->request('/v1/session/list', self::GET);
	}


	/**
	 * @param $uuid
	 * @return ResponseInterface
	 */
	public function renew($uuid): ResponseInterface
	{
		return $this->request('/v1/session/renew/' . $uuid, self::PUT);
	}

}
