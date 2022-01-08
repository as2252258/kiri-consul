<?php

namespace Kiri\Consul\Snapshots;


use Kiri\Consul\AbstractConsul;
use Http\Client\Client;


class Snapshot extends AbstractConsul
{


	/**
	 * @return Client
	 */
	public function get(): Client
	{
		return $this->request('/v1/snapshot', self::GET);
	}


	/**
	 * @param $data
	 * @return Client
	 */
	public function put($data): Client
	{
		return $this->request('/v1/snapshot', self::PUT, $data);
	}


}
