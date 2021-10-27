<?php

namespace Kiri\Consul\Agent;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Checks extends Consul
{



	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function checks(): ResponseInterface
	{
		return $this->request('/v1/agent/checks', self::GET);
	}


	/**
	 * @param mixed $data
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function register(mixed $data): ResponseInterface
	{
		return $this->request('/v1/agent/register', self::PUT, $data);
	}


	/**
	 * @param $check_id
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function deregister($check_id): ResponseInterface
	{
		return $this->request('/v1/agent/check/deregister/' . $check_id, self::PUT);
	}


	/**
	 * @param $check_id
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function pass($check_id): ResponseInterface
	{
		return $this->request('/v1/agent/check/pass/' . $check_id, self::PUT);
	}


	/**
	 * @param $check_id
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function warn($check_id): ResponseInterface
	{
		return $this->request('/v1/agent/check/warn/' . $check_id, self::PUT);
	}


	/**
	 * @param $check_id
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function fail($check_id): ResponseInterface
	{
		return $this->request('/v1/agent/check/fail/' . $check_id, self::PUT);
	}


	/**
	 * @param $check_id
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function update($check_id): ResponseInterface
	{
		return $this->request('/v1/agent/check/update/' . $check_id, self::PUT);
	}

}
