<?php

namespace Kiri\Consul\Agent;

use Kiri\AsyncClient;
use Kiri\Consul\AbstractConsul;

class Service extends AbstractConsul
{


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function list(): AsyncClient
	{
		return $this->request('/v1/agent/services', self::GET);
	}


	/**
	 * @param $service_id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function service($service_id): AsyncClient
	{
		return $this->request('/v1/agent/service/' . $service_id, self::GET);
	}


	/**
	 * @param $service_id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function agent_health($service_id): AsyncClient
	{
		return $this->request('/v1/agent/health/service/name/' . $service_id, self::GET);
	}


	/**
	 * @param $service_id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function service_health($service_id): AsyncClient
	{
		return $this->request('/v1/agent/health/service/id/' . $service_id, self::GET);
	}


	/**
	 * @param array $service_id
	 * @param bool $replace_existing_checks
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function register(array $service_id, bool $replace_existing_checks = true): AsyncClient
	{
		return $this->setQuery('replace-existing-checks=' . $replace_existing_checks)
			->request('/v1/agent/service/register', self::PUT, $service_id);
	}


	/**
	 * @param $service_id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function deregister($service_id): AsyncClient
	{
		return $this->request('/v1/agent/service/deregister/' . $service_id, self::PUT);
	}


	/**
	 * @param $service_id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent/check
	 */
	public function maintenance($service_id): AsyncClient
	{
		return $this->request('/v1/agent/service/maintenance/' . $service_id, self::PUT);
	}


}
