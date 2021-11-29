<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\Consul;
use Http\Client\Client;

class Segments extends Consul
{


	/**
	 * @return Client
	 */
	public function segment(): Client
	{
		return $this->request('/v1/operator/segment', self::GET);
	}



}
