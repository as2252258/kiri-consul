<?php

namespace Kiri\Consul\Snapshots;


use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;


class Snapshot extends Consul
{


	/**
	 * @return ResponseInterface
	 */
	public function get(): ResponseInterface
	{
		return $this->request('/v1/snapshot', self::GET);
	}


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put($data): ResponseInterface
	{
		return $this->request('/v1/snapshot', self::PUT, $data);
	}


}
