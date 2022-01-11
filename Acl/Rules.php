<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Rules extends AbstractConsul
{


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function put($data): AsyncClient
	{
		return $this->request('/v1/acl/binding-rule', self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 */
	public function get_id($id): AsyncClient
	{
		return $this->request('/v1/acl/binding-rule/' . $id, self::GET);
	}


	/**
	 * @return AsyncClient
	 */
	public function get(): AsyncClient
	{
		return $this->request('/v1/acl/binding-rules', self::GET);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 */
	public function delete_id($id): AsyncClient
	{
		return $this->request('/v1/acl/binding-rule/' . $id, self::DELETE);
	}


	/**
	 * @param $id
	 * @param $data
	 * @return AsyncClient
	 */
	public function put_id($id, $data): AsyncClient
	{
		return $this->request('/v1/acl/binding-rule/' . $id, self::PUT, $data);
	}


}
