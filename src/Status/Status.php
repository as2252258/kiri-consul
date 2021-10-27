<?php

namespace Kiri\Consul\Status;


use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Status extends Consul
{


	/**
	 * @return ResponseInterface
	 */
	public function get(): ResponseInterface
	{
		return $this->request('/v1/status/leader', self::GET);
	}


	/**
	 * @return ResponseInterface
	 */
	public function peers(): ResponseInterface
	{
		return $this->request('/v1/status/peers', self::GET);
	}


}
