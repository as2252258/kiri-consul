<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Raft extends Consul
{


	/**
	 * @return ResponseInterface
	 */
	public function configuration(): ResponseInterface
	{
		return $this->request('/v1/operator/raft/configuration', self::GET);
	}



	/**
	 * @return ResponseInterface
	 */
	public function delete_peer(): ResponseInterface
	{
		return $this->request('/v1/operator/raft/peer', self::DELETE);
	}

}
