<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Policy extends Consul
{


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function policy($data): ResponseInterface
	{
		return $this->request('/v1/acl/policy', self::PUT, $data);
	}


	/**
	 * @param $id
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put_id($id, $data): ResponseInterface
	{
		return $this->request('/v1/acl/policy/' . $id, self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 */
	public function delete_id($id): ResponseInterface
	{
		return $this->request('/v1/acl/policy/' . $id, self::DELETE);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 */
	public function get_id($id): ResponseInterface
	{
		return $this->request('/v1/acl/policy/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 */
	public function get_name($id): ResponseInterface
	{
		return $this->request('/v1/acl/policy/name/' . $id, self::GET);
	}


	/**
	 * @return ResponseInterface
	 */
	public function get(): ResponseInterface
	{
		return $this->request('/v1/acl/policies', self::GET);
	}


}
