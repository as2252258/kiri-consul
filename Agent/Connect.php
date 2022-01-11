<?php

namespace Kiri\Consul\Agent;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Connect extends AbstractConsul
{

	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/connect
	 */
	public function authorize(): AsyncClient
	{
		return $this->request('/v1/agent/connect/authorize', self::POST);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/connect
	 */
	public function ca_roots(): AsyncClient
	{
		return $this->request('/v1/agent/connect/ca/roots', self::GET);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/connect
	 */
	public function ca_leaf($id): AsyncClient
	{
		return $this->request('/v1/agent/connect/ca/leaf/' . $id, self::GET);
	}


}
