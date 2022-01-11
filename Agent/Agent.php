<?php

namespace Kiri\Consul\Agent;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Agent extends AbstractConsul
{

	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function getHost(): AsyncClient
	{
		return $this->request('/v1/agent/host', self::GET);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function members(): AsyncClient
	{
		return $this->request('/v1/agent/members', self::GET);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function self(): AsyncClient
	{
		return $this->request('/v1/agent/self', self::GET);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function reload(): AsyncClient
	{
		return $this->request('/v1/agent/self', self::PUT);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function maintenance(): AsyncClient
	{
		return $this->request('/v1/agent/maintenance', self::PUT);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function metrics(): AsyncClient
	{
		return $this->request('/v1/agent/metrics', self::GET);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function monitor(): AsyncClient
	{
		return $this->request('/v1/agent/monitor', self::GET);
	}


	/**
	 * @param $address
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function join($address): AsyncClient
	{
		return $this->request('/v1/agent/join/' . $address, self::PUT);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function leave(): AsyncClient
	{
		return $this->request('/v1/agent/leave', self::PUT);
	}


	/**
	 * @param $node
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function force_leave($node): AsyncClient
	{
		return $this->request('/v1/agent/force-leave/' . $node, self::PUT);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_default(): AsyncClient
	{
		return $this->request('/v1/agent/token/default', self::PUT);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_agent(): AsyncClient
	{
		return $this->request('/v1/agent/token/agent', self::PUT);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_agent_master(): AsyncClient
	{
		return $this->request('/v1/agent/token/agent_master', self::PUT);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_replication(): AsyncClient
	{
		return $this->request('/v1/agent/token/replication', self::PUT);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_acl_token(): AsyncClient
	{
		return $this->request('/v1/agent/token/acl_token', self::PUT);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_acl_agent_token(): AsyncClient
	{
		return $this->request('/v1/agent/token/acl_agent_token', self::PUT);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_acl_agent_master_token(): AsyncClient
	{
		return $this->request('/v1/agent/token/acl_agent_master_token', self::PUT);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_acl_replication_token(): AsyncClient
	{
		return $this->request('/v1/agent/token/acl_replication_token', self::PUT);
	}

}
