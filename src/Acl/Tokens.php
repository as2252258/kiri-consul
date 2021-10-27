<?php

namespace Kiri\Consul\Acl;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Tokens extends Consul
{


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function token($data): ResponseInterface
	{
		return $this->request('/v1/acl/token', self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 */
	public function get_token($id): ResponseInterface
	{
		return $this->request('/v1/acl/token/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put_token($id, $data): ResponseInterface
	{
		return $this->request('/v1/acl/token/' . $id, self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 */
	public function clone($id): ResponseInterface
	{
		return $this->request('/v1/acl/token/' . $id . '/clone', self::PUT);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 */
	public function delete($id): ResponseInterface
	{
		return $this->request('/v1/acl/token/' . $id, self::DELETE);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 */
	public function get($id): ResponseInterface
	{
		return $this->request('/v1/acl/tokens', self::GET);
	}


	/**
	 * @return ResponseInterface
	 */
	public function self(): ResponseInterface
	{
		return $this->request('/v1/acl/token/self', self::GET);
	}

}
