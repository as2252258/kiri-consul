<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class License extends Consul
{


	/**
	 * @return ResponseInterface
	 */
	public function license(): ResponseInterface
	{
		return $this->request('/v1/operator/license', self::GET);
	}


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put_license($data): ResponseInterface
	{
		return $this->request('/v1/operator/license', self::PUT, $data);
	}


	/**
	 * @return ResponseInterface
	 */
	public function delete_license(): ResponseInterface
	{
		return $this->request('/v1/operator/license', self::DELETE);
	}

}
