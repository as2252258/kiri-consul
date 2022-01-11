<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Roles extends AbstractConsul
{


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function put($data): AsyncClient
	{
		return $this->request('/v1/acl/role', self::PUT, $data);
	}



	/**
	 * @return AsyncClient
	 */
	public function get(): AsyncClient
	{
		return $this->request('/v1/acl/roles', self::GET);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 */
	public function get_id($id): AsyncClient
	{
		return $this->request('/v1/acl/role/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @param $data
	 * @return AsyncClient
	 */
	public function put_id($id, $data): AsyncClient
	{
		return $this->request('/v1/acl/role/' . $id, self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 */
	public function delete_id($id): AsyncClient
	{
		return $this->request('/v1/acl/role/' . $id, self::DELETE);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 */
	public function get_name($id): AsyncClient
	{
		return $this->request('/v1/acl/role/name/' . $id, self::GET);
	}

}
