<?php

namespace Kiri\Consul\Status;


use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Status extends AbstractConsul
{


	/**
	 * @return AsyncClient
	 */
	public function get(): AsyncClient
	{
		return $this->request('/v1/status/leader', self::GET);
	}


	/**
	 * @return AsyncClient
	 */
	public function peers(): AsyncClient
	{
		return $this->request('/v1/status/peers', self::GET);
	}


}
