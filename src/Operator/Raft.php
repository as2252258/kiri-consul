<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\Consul;
use Http\Client\Client;

class Raft extends Consul
{


	/**
	 * @return Client
	 */
	public function configuration(): Client
	{
		return $this->request('/v1/operator/raft/configuration', self::GET);
	}



	/**
	 * @return Client
	 */
	public function delete_peer(): Client
	{
		return $this->request('/v1/operator/raft/peer', self::DELETE);
	}

}
