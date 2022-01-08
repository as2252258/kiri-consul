<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\AbstractConsul;
use Http\Client\Client;

class Segments extends AbstractConsul
{


	/**
	 * @return Client
	 */
	public function segment(): Client
	{
		return $this->request('/v1/operator/segment', self::GET);
	}



}
