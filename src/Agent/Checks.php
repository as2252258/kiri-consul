<?php

namespace Kiri\Consul\Agent;

use Kiri\Consul\Consul;
use Http\Client\Client;

class Checks extends Consul
{



	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function checks(): Client
	{
		return $this->request('/v1/agent/checks', self::GET);
	}


	/**
	 * @param mixed $data
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function register(mixed $data): Client
	{
		return $this->request('/v1/agent/register', self::PUT, $data);
	}


	/**
	 * @param $check_id
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function deregister($check_id): Client
	{
		return $this->request('/v1/agent/check/deregister/' . $check_id, self::PUT);
	}


	/**
	 * @param $check_id
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function pass($check_id): Client
	{
		return $this->request('/v1/agent/check/pass/' . $check_id, self::PUT);
	}


	/**
	 * @param $check_id
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function warn($check_id): Client
	{
		return $this->request('/v1/agent/check/warn/' . $check_id, self::PUT);
	}


	/**
	 * @param $check_id
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function fail($check_id): Client
	{
		return $this->request('/v1/agent/check/fail/' . $check_id, self::PUT);
	}


	/**
	 * @param $check_id
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function update($check_id): Client
	{
		return $this->request('/v1/agent/check/update/' . $check_id, self::PUT);
	}

}
