<?php

namespace Kiri\Consul\Transactions;

use Kiri\Consul\AbstractConsul;
use Http\Client\Client;

class Transactions extends AbstractConsul
{


	/**
	 * @param $data
	 * @return Client
	 */
	public function put($data): Client
	{
		return $this->request('/v1/txn', self::PUT, $data);
	}

}
