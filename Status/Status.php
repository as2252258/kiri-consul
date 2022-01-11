<?php

namespace Kiri\Consul\Status;


use Kiri\Consul\AbstractConsul;
use Kiri\Client;

class Status extends AbstractConsul
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
