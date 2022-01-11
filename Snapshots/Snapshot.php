<?php

namespace Kiri\Consul\Snapshots;


use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;


class Snapshot extends AbstractConsul
{


	/**
	 * @return AsyncClient
	 */
	public function get(): AsyncClient
	{
		return $this->request('/v1/snapshot', self::GET);
	}


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function put($data): AsyncClient
	{
		return $this->request('/v1/snapshot', self::PUT, $data);
	}


}
