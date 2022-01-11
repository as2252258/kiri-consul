<?php

namespace Kiri\Consul;

use Kiri\AsyncClient;

class Query extends AbstractConsul
{


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function post($data): AsyncClient
	{
		return $this->request('/v1/query', self::POST, $data);
	}


	/**
	 * @return AsyncClient
	 */
	public function get(): AsyncClient
	{
		return $this->request('/v1/query', self::GET);
	}


	/**
	 * @param $uuid
	 * @param $data
	 * @return AsyncClient
	 */
	public function put($uuid, $data): AsyncClient
	{
		return $this->request('/v1/query/' . $uuid, self::PUT, $data);
	}


	/**
	 * @param $uuid
	 * @return AsyncClient
	 */
	public function delete($uuid): AsyncClient
	{
		return $this->request('/v1/query/' . $uuid, self::DELETE);
	}


	/**
	 * @param $uuid
	 * @return AsyncClient
	 */
	public function get_uuid($uuid): AsyncClient
	{
		return $this->request('/v1/query/' . $uuid, self::GET);
	}


	/**
	 * @param $uuid
	 * @return AsyncClient
	 */
	public function get_uuid_execute($uuid): AsyncClient
	{
		return $this->request('/v1/query/' . $uuid . '/execute', self::GET);
	}


	/**
	 * @param $uuid
	 * @return AsyncClient
	 */
	public function get_uuid_explain($uuid): AsyncClient
	{
		return $this->request('/v1/query/' . $uuid . '/explain', self::GET);
	}


}
