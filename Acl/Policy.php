<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\AbstractConsul;
use Http\Client\Client;

class Policy extends AbstractConsul
{


	/**
	 * @param $data
	 * @return Client
	 */
	public function policy($data): Client
	{
		return $this->request('/v1/acl/policy', self::PUT, $data);
	}


	/**
	 * @param $id
	 * @param $data
	 * @return Client
	 */
	public function put_id($id, $data): Client
	{
		return $this->request('/v1/acl/policy/' . $id, self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return Client
	 */
	public function delete_id($id): Client
	{
		return $this->request('/v1/acl/policy/' . $id, self::DELETE);
	}


	/**
	 * @param $id
	 * @return Client
	 */
	public function get_id($id): Client
	{
		return $this->request('/v1/acl/policy/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @return Client
	 */
	public function get_name($id): Client
	{
		return $this->request('/v1/acl/policy/name/' . $id, self::GET);
	}


	/**
	 * @return Client
	 */
	public function get(): Client
	{
		return $this->request('/v1/acl/policies', self::GET);
	}


}
