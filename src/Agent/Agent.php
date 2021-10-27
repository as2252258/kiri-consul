<?php

namespace Kiri\Consul\Agent;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Agent extends Consul
{

	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function getHost(): ResponseInterface
	{
		return $this->request('/v1/agent/host', self::GET);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function members(): ResponseInterface
	{
		return $this->request('/v1/agent/members', self::GET);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function self(): ResponseInterface
	{
		return $this->request('/v1/agent/self', self::GET);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function reload(): ResponseInterface
	{
		return $this->request('/v1/agent/self', self::PUT);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function maintenance(): ResponseInterface
	{
		return $this->request('/v1/agent/maintenance', self::PUT);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function metrics(): ResponseInterface
	{
		return $this->request('/v1/agent/metrics', self::GET);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function monitor(): ResponseInterface
	{
		return $this->request('/v1/agent/monitor', self::GET);
	}


	/**
	 * @param $address
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function join($address): ResponseInterface
	{
		return $this->request('/v1/agent/join/' . $address, self::PUT);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function leave(): ResponseInterface
	{
		return $this->request('/v1/agent/leave', self::PUT);
	}


	/**
	 * @param $node
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function force_leave($node): ResponseInterface
	{
		return $this->request('/v1/agent/force-leave/' . $node, self::PUT);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_default(): ResponseInterface
	{
		return $this->request('/v1/agent/token/default', self::PUT);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_agent(): ResponseInterface
	{
		return $this->request('/v1/agent/token/agent', self::PUT);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_agent_master(): ResponseInterface
	{
		return $this->request('/v1/agent/token/agent_master', self::PUT);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_replication(): ResponseInterface
	{
		return $this->request('/v1/agent/token/replication', self::PUT);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_acl_token(): ResponseInterface
	{
		return $this->request('/v1/agent/token/acl_token', self::PUT);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_acl_agent_token(): ResponseInterface
	{
		return $this->request('/v1/agent/token/acl_agent_token', self::PUT);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_acl_agent_master_token(): ResponseInterface
	{
		return $this->request('/v1/agent/token/acl_agent_master_token', self::PUT);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/agent
	 */
	public function token_acl_replication_token(): ResponseInterface
	{
		return $this->request('/v1/agent/token/acl_replication_token', self::PUT);
	}

}
