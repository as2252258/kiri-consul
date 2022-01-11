<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Auth extends AbstractConsul
{


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function put($data): AsyncClient
	{
		return $this->request('/v1/acl/auth-method', self::PUT, $data);
	}


	/**
	 * @param $name
	 * @return AsyncClient
	 */
	public function get_name($name): AsyncClient
	{
		return $this->request('/v1/acl/auth-method/' . $name, self::GET);
	}


	/**
	 * @param $name
	 * @param $data
	 * @return AsyncClient
	 */
	public function put_name($name, $data): AsyncClient
	{
		return $this->request('/v1/acl/auth-method/' . $name, self::PUT, $data);
	}


	/**
	 * @param $name
	 * @return AsyncClient
	 */
	public function delete_name($name): AsyncClient
	{
		return $this->request('/v1/acl/auth-method/' . $name, self::DELETE);
	}


	/**
	 * @return AsyncClient
	 */
	public function get(): AsyncClient
	{
		return $this->request('/v1/acl/auth-methods', self::GET);
	}


}
