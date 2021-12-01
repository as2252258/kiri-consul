<?php

namespace Kiri\Consul\Agent;

use Kiri\Consul\AbstractConsul;
use Http\Client\Client;

class Agent extends AbstractConsul
{

	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function getHost(): Client
	{
		return $this->request('/v1/agent/host', self::GET);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function members(): Client
	{
		return $this->request('/v1/agent/members', self::GET);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function self(): Client
	{
		return $this->request('/v1/agent/self', self::GET);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function reload(): Client
	{
		return $this->request('/v1/agent/self', self::PUT);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function maintenance(): Client
	{
		return $this->request('/v1/agent/maintenance', self::PUT);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function metrics(): Client
	{
		return $this->request('/v1/agent/metrics', self::GET);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function monitor(): Client
	{
		return $this->request('/v1/agent/monitor', self::GET);
	}


	/**
	 * @param $address
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function join($address): Client
	{
		return $this->request('/v1/agent/join/' . $address, self::PUT);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function leave(): Client
	{
		return $this->request('/v1/agent/leave', self::PUT);
	}


	/**
	 * @param $node
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function force_leave($node): Client
	{
		return $this->request('/v1/agent/force-leave/' . $node, self::PUT);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_default(): Client
	{
		return $this->request('/v1/agent/token/default', self::PUT);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_agent(): Client
	{
		return $this->request('/v1/agent/token/agent', self::PUT);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_agent_master(): Client
	{
		return $this->request('/v1/agent/token/agent_master', self::PUT);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_replication(): Client
	{
		return $this->request('/v1/agent/token/replication', self::PUT);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_acl_token(): Client
	{
		return $this->request('/v1/agent/token/acl_token', self::PUT);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_acl_agent_token(): Client
	{
		return $this->request('/v1/agent/token/acl_agent_token', self::PUT);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_acl_agent_master_token(): Client
	{
		return $this->request('/v1/agent/token/acl_agent_master_token', self::PUT);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_acl_replication_token(): Client
	{
		return $this->request('/v1/agent/token/acl_replication_token', self::PUT);
	}

}
