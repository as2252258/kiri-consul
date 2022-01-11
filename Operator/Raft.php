<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Raft extends AbstractConsul
{


	/**
	 * @return AsyncClient
	 */
	public function configuration(): AsyncClient
	{
		return $this->request('/v1/operator/raft/configuration', self::GET);
	}



	/**
	 * @return AsyncClient
	 */
	public function delete_peer(): AsyncClient
	{
		return $this->request('/v1/operator/raft/peer', self::DELETE);
	}

}
