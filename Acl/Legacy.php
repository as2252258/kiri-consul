<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Legacy extends AbstractConsul
{


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function create($data): AsyncClient
	{
		return $this->request('/v1/acl/create', self::PUT, $data);
	}


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function update($data): AsyncClient
	{
		return $this->request('/v1/acl/update', self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 */
	public function info($id): AsyncClient
	{
		return $this->request('/v1/acl/info/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 */
	public function clone($id): AsyncClient
	{
		return $this->request('/v1/acl/clone/' . $id, self::PUT);
	}


	/**
	 * @return AsyncClient
	 */
	public function list(): AsyncClient
	{
		return $this->request('/v1/acl/list', self::GET);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 */
	public function delete($id): AsyncClient
	{
		return $this->request('/v1/acl/destroy/' . $id, self::DELETE);
	}

}
