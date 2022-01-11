<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Acl extends AbstractConsul
{


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function bootstrap($data): AsyncClient
	{
		return $this->request('/v1/acl/bootstrap', self::PUT, $data);
	}


	/**
	 * @return AsyncClient
	 */
	public function replication(): AsyncClient
	{
		return $this->request('/v1/acl/replication', self::GET);
	}


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function rules_translate($data): AsyncClient
	{
		return $this->request('/v1/acl/rules/translate', self::POST, $data);
	}


	/**
	 * @param $accessor_id
	 * @return AsyncClient
	 */
	public function get_rule_translate($accessor_id): AsyncClient
	{
		return $this->request('/v1/acl/rules/translate/' . $accessor_id, self::GET);
	}


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function login($data): AsyncClient
	{
		return $this->request('/v1/acl/login', self::POST, $data);
	}


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function logout($data): AsyncClient
	{
		return $this->request('/v1/acl/logout', self::POST, $data);
	}


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function oidc_auth_url($data): AsyncClient
	{
		return $this->request('/v1/acl/oidc/auth-url', self::POST, $data);
	}


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function oidc_callback($data): AsyncClient
	{
		return $this->request('/v1/acl/oidc/callback', self::POST, $data);
	}

}
