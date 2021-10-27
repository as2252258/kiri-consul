<?php

namespace Kiri\Consul\Agent;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Connect extends Consul
{

	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent/connect
	 */
	public function authorize(): ResponseInterface
	{
		return $this->request('/v1/agent/connect/authorize', self::POST);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent/connect
	 */
	public function ca_roots(): ResponseInterface
	{
		return $this->request('/v1/agent/connect/ca/roots', self::GET);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent/connect
	 */
	public function ca_leaf($id): ResponseInterface
	{
		return $this->request('/v1/agent/connect/ca/leaf/' . $id, self::GET);
	}


}
