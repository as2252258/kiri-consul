<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Policy extends AbstractConsul
{


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function policy($data): AsyncClient
	{
		return $this->request('/v1/acl/policy', self::PUT, $data);
	}


	/**
	 * @param $id
	 * @param $data
	 * @return AsyncClient
	 */
	public function put_id($id, $data): AsyncClient
	{
		return $this->request('/v1/acl/policy/' . $id, self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 */
	public function delete_id($id): AsyncClient
	{
		return $this->request('/v1/acl/policy/' . $id, self::DELETE);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 */
	public function get_id($id): AsyncClient
	{
		return $this->request('/v1/acl/policy/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 */
	public function get_name($id): AsyncClient
	{
		return $this->request('/v1/acl/policy/name/' . $id, self::GET);
	}


	/**
	 * @return AsyncClient
	 */
	public function get(): AsyncClient
	{
		return $this->request('/v1/acl/policies', self::GET);
	}


}
