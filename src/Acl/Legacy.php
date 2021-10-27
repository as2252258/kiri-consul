<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Legacy extends Consul
{


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function create($data): ResponseInterface
	{
		return $this->request('/v1/acl/create', self::PUT, $data);
	}


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function update($data): ResponseInterface
	{
		return $this->request('/v1/acl/update', self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 */
	public function info($id): ResponseInterface
	{
		return $this->request('/v1/acl/info/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 */
	public function clone($id): ResponseInterface
	{
		return $this->request('/v1/acl/clone/' . $id, self::PUT);
	}


	/**
	 * @return ResponseInterface
	 */
	public function list(): ResponseInterface
	{
		return $this->request('/v1/acl/list', self::GET);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 */
	public function delete($id): ResponseInterface
	{
		return $this->request('/v1/acl/destroy/' . $id, self::DELETE);
	}

}
