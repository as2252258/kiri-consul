<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Tokens extends AbstractConsul
{


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function token($data): AsyncClient
	{
		return $this->request('/v1/acl/token', self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 */
	public function get_token($id): AsyncClient
	{
		return $this->request('/v1/acl/token/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @param $data
	 * @return AsyncClient
	 */
	public function put_token($id, $data): AsyncClient
	{
		return $this->request('/v1/acl/token/' . $id, self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 */
	public function clone($id): AsyncClient
	{
		return $this->request('/v1/acl/token/' . $id . '/clone', self::PUT);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 */
	public function delete($id): AsyncClient
	{
		return $this->request('/v1/acl/token/' . $id, self::DELETE);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 */
	public function get($id): AsyncClient
	{
		return $this->request('/v1/acl/tokens', self::GET);
	}


	/**
	 * @return AsyncClient
	 */
	public function self(): AsyncClient
	{
		return $this->request('/v1/acl/token/self', self::GET);
	}

}
