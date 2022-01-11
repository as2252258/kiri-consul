<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Segments extends AbstractConsul
{


	/**
	 * @return AsyncClient
	 */
	public function segment(): AsyncClient
	{
		return $this->request('/v1/operator/segment', self::GET);
	}



}
