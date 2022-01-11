<?php

namespace Kiri\Consul\Transactions;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Transactions extends AbstractConsul
{


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function put($data): AsyncClient
	{
		return $this->request('/v1/txn', self::PUT, $data);
	}

}
