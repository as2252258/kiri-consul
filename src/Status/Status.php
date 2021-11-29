<?php

namespace Kiri\Consul\Status;


use Kiri\Consul\Consul;
use Http\Client\Client;

class Status extends Consul
{


	/**
	 * @return Client
	 */
	public function get(): Client
	{
		return $this->request('/v1/status/leader', self::GET);
	}


	/**
	 * @return Client
	 */
	public function peers(): Client
	{
		return $this->request('/v1/status/peers', self::GET);
	}


}
