<?php

namespace Kiri\Consul;

use Http\Client\Client;


class Health extends AbstractConsul
{


	/**
	 * @param $node
	 * @return Client
	 */
	public function node($node): Client
	{
		return $this->request('/v1/health/node/'.$node, self::GET);
	}


	/**
	 * @param $node
	 * @return Client
	 */
	public function checks($node): Client
	{
		return $this->request('/v1/health/checks/'.$node, self::GET);
	}


	/**
	 * @param $node
	 * @return Client
	 */
	public function service($node): Client
	{
		return $this->request('/v1/health/service/'.$node, self::GET);
	}


	/**
	 * @param $node
	 * @return Client
	 */
	public function connect($node): Client
	{
		return $this->request('/v1/health/connect/'.$node, self::GET);
	}



	/**
	 * @param $node
	 * @return Client
	 */
	public function ingress($node): Client
	{
		return $this->request('/v1/health/ingress/'.$node, self::GET);
	}


	/**
	 * @param $node
	 * @return Client
	 */
	public function state($node): Client
	{
		return $this->request('/v1/health/state/'.$node, self::GET);
	}

}
