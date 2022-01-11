<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class License extends AbstractConsul
{


	/**
	 * @return AsyncClient
	 */
	public function license(): AsyncClient
	{
		return $this->request('/v1/operator/license', self::GET);
	}


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function put_license($data): AsyncClient
	{
		return $this->request('/v1/operator/license', self::PUT, $data);
	}


	/**
	 * @return AsyncClient
	 */
	public function delete_license(): AsyncClient
	{
		return $this->request('/v1/operator/license', self::DELETE);
	}

}
