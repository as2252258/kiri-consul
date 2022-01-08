<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\AbstractConsul;
use Http\Client\Client;

class Legacy extends AbstractConsul
{


	/**
	 * @param $data
	 * @return Client
	 */
	public function create($data): Client
	{
		return $this->request('/v1/acl/create', self::PUT, $data);
	}


	/**
	 * @param $data
	 * @return Client
	 */
	public function update($data): Client
	{
		return $this->request('/v1/acl/update', self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return Client
	 */
	public function info($id): Client
	{
		return $this->request('/v1/acl/info/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @return Client
	 */
	public function clone($id): Client
	{
		return $this->request('/v1/acl/clone/' . $id, self::PUT);
	}


	/**
	 * @return Client
	 */
	public function list(): Client
	{
		return $this->request('/v1/acl/list', self::GET);
	}


	/**
	 * @param $id
	 * @return Client
	 */
	public function delete($id): Client
	{
		return $this->request('/v1/acl/destroy/' . $id, self::DELETE);
	}

}
