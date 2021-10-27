<?php

namespace Kiri\Consul;

use Psr\Http\Message\ResponseInterface;

class Query extends Consul
{


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function post($data): ResponseInterface
	{
		return $this->request('/v1/query', self::POST, $data);
	}


	/**
	 * @return ResponseInterface
	 */
	public function get(): ResponseInterface
	{
		return $this->request('/v1/query', self::GET);
	}


	/**
	 * @param $uuid
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put($uuid, $data): ResponseInterface
	{
		return $this->request('/v1/query/' . $uuid, self::PUT, $data);
	}


	/**
	 * @param $uuid
	 * @return ResponseInterface
	 */
	public function delete($uuid): ResponseInterface
	{
		return $this->request('/v1/query/' . $uuid, self::DELETE);
	}


	/**
	 * @param $uuid
	 * @return ResponseInterface
	 */
	public function get_uuid($uuid): ResponseInterface
	{
		return $this->request('/v1/query/' . $uuid, self::GET);
	}


	/**
	 * @param $uuid
	 * @return ResponseInterface
	 */
	public function get_uuid_execute($uuid): ResponseInterface
	{
		return $this->request('/v1/query/' . $uuid . '/execute', self::GET);
	}


	/**
	 * @param $uuid
	 * @return ResponseInterface
	 */
	public function get_uuid_explain($uuid): ResponseInterface
	{
		return $this->request('/v1/query/' . $uuid . '/explain', self::GET);
	}


}
