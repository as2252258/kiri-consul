<?php

namespace Kiri\Consul;

use Kiri\AsyncClient;

class Events extends AbstractConsul
{


	/**
	 * @param $name
	 * @param $data
	 * @return AsyncClient
	 */
	public function fire($name, $data): AsyncClient
	{
		return $this->request('/v1/event/fire/' . $name, self::PUT, $data);
	}


	/**
	 * @return AsyncClient
	 */
	public function list(): AsyncClient
	{
		return $this->request('/v1/event/list', self::GET);
	}

}
