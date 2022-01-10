<?php

namespace Kiri\Consul;

use Kiri\Client;

class Events extends AbstractConsul
{


	/**
	 * @param $name
	 * @param $data
	 * @return Client
	 */
	public function fire($name, $data): Client
	{
		return $this->request('/v1/event/fire/' . $name, self::PUT, $data);
	}


	/**
	 * @return Client
	 */
	public function list(): Client
	{
		return $this->request('/v1/event/list', self::GET);
	}

}
