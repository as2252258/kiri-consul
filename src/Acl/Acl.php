<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Acl extends Consul
{


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function bootstrap($data): ResponseInterface
	{
		return $this->request('/v1/acl/bootstrap', self::PUT, $data);
	}


	/**
	 * @return ResponseInterface
	 */
	public function replication(): ResponseInterface
	{
		return $this->request('/v1/acl/replication', self::GET);
	}


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function rules_translate($data): ResponseInterface
	{
		return $this->request('/v1/acl/rules/translate', self::POST, $data);
	}


	/**
	 * @param $accessor_id
	 * @return ResponseInterface
	 */
	public function get_rule_translate($accessor_id): ResponseInterface
	{
		return $this->request('/v1/acl/rules/translate/' . $accessor_id, self::GET);
	}


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function login($data): ResponseInterface
	{
		return $this->request('/v1/acl/login', self::POST, $data);
	}


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function logout($data): ResponseInterface
	{
		return $this->request('/v1/acl/logout', self::POST, $data);
	}


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function oidc_auth_url($data): ResponseInterface
	{
		return $this->request('/v1/acl/oidc/auth-url', self::POST, $data);
	}


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function oidc_callback($data): ResponseInterface
	{
		return $this->request('/v1/acl/oidc/callback', self::POST, $data);
	}

}
