<?php

namespace Kiri\Consul\Agent;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Checks extends AbstractConsul
{



	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function checks(): AsyncClient
	{
		return $this->request('/v1/agent/checks', self::GET);
	}


	/**
	 * @param mixed $data
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function register(mixed $data): AsyncClient
	{
		return $this->request('/v1/agent/register', self::PUT, $data);
	}


	/**
	 * @param $check_id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function deregister($check_id): AsyncClient
	{
		return $this->request('/v1/agent/check/deregister/' . $check_id, self::PUT);
	}


	/**
	 * @param $check_id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function pass($check_id): AsyncClient
	{
		return $this->request('/v1/agent/check/pass/' . $check_id, self::PUT);
	}


	/**
	 * @param $check_id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function warn($check_id): AsyncClient
	{
		return $this->request('/v1/agent/check/warn/' . $check_id, self::PUT);
	}


	/**
	 * @param $check_id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function fail($check_id): AsyncClient
	{
		return $this->request('/v1/agent/check/fail/' . $check_id, self::PUT);
	}


	/**
	 * @param $check_id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function update($check_id): AsyncClient
	{
		return $this->request('/v1/agent/check/update/' . $check_id, self::PUT);
	}

}
