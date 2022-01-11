<?php

namespace Kiri\Consul;

use Kiri\AsyncClient;


class Health extends AbstractConsul
{


	/**
	 * @param $node
	 * @return AsyncClient
	 */
	public function node($node): AsyncClient
	{
		return $this->request('/v1/health/node/'.$node, self::GET);
	}


	/**
	 * @param $node
	 * @return AsyncClient
	 */
	public function checks($node): AsyncClient
	{
		return $this->request('/v1/health/checks/'.$node, self::GET);
	}


	/**
	 * @param $node
	 * @return AsyncClient
	 */
	public function service($node): AsyncClient
	{
		return $this->request('/v1/health/service/'.$node, self::GET);
	}


	/**
	 * @param $node
	 * @return AsyncClient
	 */
	public function connect($node): AsyncClient
	{
		return $this->request('/v1/health/connect/'.$node, self::GET);
	}



	/**
	 * @param $node
	 * @return AsyncClient
	 */
	public function ingress($node): AsyncClient
	{
		return $this->request('/v1/health/ingress/'.$node, self::GET);
	}


	/**
	 * @param $node
	 * @return AsyncClient
	 */
	public function state($node): AsyncClient
	{
		return $this->request('/v1/health/state/'.$node, self::GET);
	}

}
