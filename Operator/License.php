<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\AbstractConsul;
use Http\Client\Client;

class License extends AbstractConsul
{


	/**
	 * @return Client
	 */
	public function license(): Client
	{
		return $this->request('/v1/operator/license', self::GET);
	}


	/**
	 * @param $data
	 * @return Client
	 */
	public function put_license($data): Client
	{
		return $this->request('/v1/operator/license', self::PUT, $data);
	}


	/**
	 * @return Client
	 */
	public function delete_license(): Client
	{
		return $this->request('/v1/operator/license', self::DELETE);
	}

}
