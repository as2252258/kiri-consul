<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\AbstractConsul;
use Kiri\Client;

class Tokens extends AbstractConsul
{


	/**
	 * @param $data
	 * @return Client
	 */
	public function token($data): Client
	{
		return $this->request('/v1/acl/token', self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return Client
	 */
	public function get_token($id): Client
	{
		return $this->request('/v1/acl/token/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @param $data
	 * @return Client
	 */
	public function put_token($id, $data): Client
	{
		return $this->request('/v1/acl/token/' . $id, self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return Client
	 */
	public function clone($id): Client
	{
		return $this->request('/v1/acl/token/' . $id . '/clone', self::PUT);
	}


	/**
	 * @param $id
	 * @return Client
	 */
	public function delete($id): Client
	{
		return $this->request('/v1/acl/token/' . $id, self::DELETE);
	}


	/**
	 * @param $id
	 * @return Client
	 */
	public function get($id): Client
	{
		return $this->request('/v1/acl/tokens', self::GET);
	}


	/**
	 * @return Client
	 */
	public function self(): Client
	{
		return $this->request('/v1/acl/token/self', self::GET);
	}

}
