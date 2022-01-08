<?php

namespace Kiri\Consul\Agent;

use Kiri\Consul\AbstractConsul;
use Http\Client\Client;

class Connect extends AbstractConsul
{

	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent/connect
	 */
	public function authorize(): Client
	{
		return $this->request('/v1/agent/connect/authorize', self::POST);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent/connect
	 */
	public function ca_roots(): Client
	{
		return $this->request('/v1/agent/connect/ca/roots', self::GET);
	}


	/**
	 * @param $id
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent/connect
	 */
	public function ca_leaf($id): Client
	{
		return $this->request('/v1/agent/connect/ca/leaf/' . $id, self::GET);
	}


}
