<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\AbstractConsul;
use Http\Client\Client;

class Roles extends AbstractConsul
{


	/**
	 * @param $data
	 * @return Client
	 */
	public function put($data): Client
	{
		return $this->request('/v1/acl/role', self::PUT, $data);
	}



	/**
	 * @return Client
	 */
	public function get(): Client
	{
		return $this->request('/v1/acl/roles', self::GET);
	}


	/**
	 * @param $id
	 * @return Client
	 */
	public function get_id($id): Client
	{
		return $this->request('/v1/acl/role/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @param $data
	 * @return Client
	 */
	public function put_id($id, $data): Client
	{
		return $this->request('/v1/acl/role/' . $id, self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return Client
	 */
	public function delete_id($id): Client
	{
		return $this->request('/v1/acl/role/' . $id, self::DELETE);
	}


	/**
	 * @param $id
	 * @return Client
	 */
	public function get_name($id): Client
	{
		return $this->request('/v1/acl/role/name/' . $id, self::GET);
	}

}
