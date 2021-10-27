<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Rules extends Consul
{


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put($data): ResponseInterface
	{
		return $this->request('/v1/acl/binding-rule', self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 */
	public function get_id($id): ResponseInterface
	{
		return $this->request('/v1/acl/binding-rule/' . $id, self::GET);
	}


	/**
	 * @return ResponseInterface
	 */
	public function get(): ResponseInterface
	{
		return $this->request('/v1/acl/binding-rules', self::GET);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 */
	public function delete_id($id): ResponseInterface
	{
		return $this->request('/v1/acl/binding-rule/' . $id, self::DELETE);
	}


	/**
	 * @param $id
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put_id($id, $data): ResponseInterface
	{
		return $this->request('/v1/acl/binding-rule/' . $id, self::PUT, $data);
	}


}
