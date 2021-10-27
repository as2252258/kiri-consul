<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Segments extends Consul
{


	/**
	 * @return ResponseInterface
	 */
	public function segment(): ResponseInterface
	{
		return $this->request('/v1/operator/segment', self::GET);
	}



}
