<?php

namespace Kiri\Consul\Transactions;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Transactions extends Consul
{


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put($data): ResponseInterface
	{
		return $this->request('/v1/txn', self::PUT, $data);
	}

}
