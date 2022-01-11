<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\AbstractConsul;
use Kiri\Client;

class Rules extends AbstractConsul
{


	/**
	 * @param $data
	 * @return Client
	 */
	public function put($data): Client
	{
		return $this->request('/v1/acl/binding-rule', self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return Client
	 */
	public function get_id($id): Client
	{
		return $this->request('/v1/acl/binding-rule/' . $id, self::GET);
	}


	/**
	 * @return Client
	 */
	public function get(): Client
	{
		return $this->request('/v1/acl/binding-rules', self::GET);
	}


	/**
	 * @param $id
	 * @return Client
	 */
	public function delete_id($id): Client
	{
		return $this->request('/v1/acl/binding-rule/' . $id, self::DELETE);
	}


	/**
	 * @param $id
	 * @param $data
	 * @return Client
	 */
	public function put_id($id, $data): Client
	{
		return $this->request('/v1/acl/binding-rule/' . $id, self::PUT, $data);
	}


}
