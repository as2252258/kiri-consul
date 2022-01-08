<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\AbstractConsul;
use Http\Client\Client;

class Acl extends AbstractConsul
{


	/**
	 * @param $data
	 * @return Client
	 */
	public function bootstrap($data): Client
	{
		return $this->request('/v1/acl/bootstrap', self::PUT, $data);
	}


	/**
	 * @return Client
	 */
	public function replication(): Client
	{
		return $this->request('/v1/acl/replication', self::GET);
	}


	/**
	 * @param $data
	 * @return Client
	 */
	public function rules_translate($data): Client
	{
		return $this->request('/v1/acl/rules/translate', self::POST, $data);
	}


	/**
	 * @param $accessor_id
	 * @return Client
	 */
	public function get_rule_translate($accessor_id): Client
	{
		return $this->request('/v1/acl/rules/translate/' . $accessor_id, self::GET);
	}


	/**
	 * @param $data
	 * @return Client
	 */
	public function login($data): Client
	{
		return $this->request('/v1/acl/login', self::POST, $data);
	}


	/**
	 * @param $data
	 * @return Client
	 */
	public function logout($data): Client
	{
		return $this->request('/v1/acl/logout', self::POST, $data);
	}


	/**
	 * @param $data
	 * @return Client
	 */
	public function oidc_auth_url($data): Client
	{
		return $this->request('/v1/acl/oidc/auth-url', self::POST, $data);
	}


	/**
	 * @param $data
	 * @return Client
	 */
	public function oidc_callback($data): Client
	{
		return $this->request('/v1/acl/oidc/callback', self::POST, $data);
	}

}
