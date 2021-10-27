<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Roles extends Consul
{


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put($data): ResponseInterface
	{
		return $this->request('/v1/acl/role', self::PUT, $data);
	}



	/**
	 * @return ResponseInterface
	 */
	public function get(): ResponseInterface
	{
		return $this->request('/v1/acl/roles', self::GET);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 */
	public function get_id($id): ResponseInterface
	{
		return $this->request('/v1/acl/role/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put_id($id, $data): ResponseInterface
	{
		return $this->request('/v1/acl/role/' . $id, self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 */
	public function delete_id($id): ResponseInterface
	{
		return $this->request('/v1/acl/role/' . $id, self::DELETE);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 */
	public function get_name($id): ResponseInterface
	{
		return $this->request('/v1/acl/role/name/' . $id, self::GET);
	}

}
