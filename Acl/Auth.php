<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\AbstractConsul;
use Kiri\Client;

class Auth extends AbstractConsul
{


	/**
	 * @param $data
	 * @return Client
	 */
	public function put($data): Client
	{
		return $this->request('/v1/acl/auth-method', self::PUT, $data);
	}


	/**
	 * @param $name
	 * @return Client
	 */
	public function get_name($name): Client
	{
		return $this->request('/v1/acl/auth-method/' . $name, self::GET);
	}


	/**
	 * @param $name
	 * @param $data
	 * @return Client
	 */
	public function put_name($name, $data): Client
	{
		return $this->request('/v1/acl/auth-method/' . $name, self::PUT, $data);
	}


	/**
	 * @param $name
	 * @return Client
	 */
	public function delete_name($name): Client
	{
		return $this->request('/v1/acl/auth-method/' . $name, self::DELETE);
	}


	/**
	 * @return Client
	 */
	public function get(): Client
	{
		return $this->request('/v1/acl/auth-methods', self::GET);
	}


}
