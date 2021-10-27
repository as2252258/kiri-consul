<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Auth extends Consul
{


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put($data): ResponseInterface
	{
		return $this->request('/v1/acl/auth-method', self::PUT, $data);
	}


	/**
	 * @param $name
	 * @return ResponseInterface
	 */
	public function get_name($name): ResponseInterface
	{
		return $this->request('/v1/acl/auth-method/' . $name, self::GET);
	}


	/**
	 * @param $name
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put_name($name, $data): ResponseInterface
	{
		return $this->request('/v1/acl/auth-method/' . $name, self::PUT, $data);
	}


	/**
	 * @param $name
	 * @return ResponseInterface
	 */
	public function delete_name($name): ResponseInterface
	{
		return $this->request('/v1/acl/auth-method/' . $name, self::DELETE);
	}


	/**
	 * @return ResponseInterface
	 */
	public function get(): ResponseInterface
	{
		return $this->request('/v1/acl/auth-methods', self::GET);
	}


}
