<?php

namespace Kiri\Consul;

use Psr\Http\Message\ResponseInterface;

class Events extends Consul
{


	/**
	 * @param $name
	 * @param $data
	 * @return ResponseInterface
	 */
	public function fire($name, $data): ResponseInterface
	{
		return $this->request('/v1/event/fire/' . $name, self::PUT, $data);
	}


	/**
	 * @return ResponseInterface
	 */
	public function list(): ResponseInterface
	{
		return $this->request('/v1/event/list', self::GET);
	}

}
