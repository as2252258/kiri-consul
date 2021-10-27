<?php

namespace Kiri\Consul;

use Psr\Http\Message\ResponseInterface;


class Health extends Consul
{


	/**
	 * @param $node
	 * @return ResponseInterface
	 */
	public function node($node): ResponseInterface
	{
		return $this->request('/v1/health/node/'.$node, self::GET);
	}


	/**
	 * @param $node
	 * @return ResponseInterface
	 */
	public function checks($node): ResponseInterface
	{
		return $this->request('/v1/health/checks/'.$node, self::GET);
	}


	/**
	 * @param $node
	 * @return ResponseInterface
	 */
	public function service($node): ResponseInterface
	{
		return $this->request('/v1/health/service/'.$node, self::GET);
	}


	/**
	 * @param $node
	 * @return ResponseInterface
	 */
	public function connect($node): ResponseInterface
	{
		return $this->request('/v1/health/connect/'.$node, self::GET);
	}



	/**
	 * @param $node
	 * @return ResponseInterface
	 */
	public function ingress($node): ResponseInterface
	{
		return $this->request('/v1/health/ingress/'.$node, self::GET);
	}


	/**
	 * @param $node
	 * @return ResponseInterface
	 */
	public function state($node): ResponseInterface
	{
		return $this->request('/v1/health/state/'.$node, self::GET);
	}

}
