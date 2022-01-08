<?php

namespace Kiri\Consul;

use Http\Client\Client;

class Query extends AbstractConsul
{


	/**
	 * @param $data
	 * @return Client
	 */
	public function post($data): Client
	{
		return $this->request('/v1/query', self::POST, $data);
	}


	/**
	 * @return Client
	 */
	public function get(): Client
	{
		return $this->request('/v1/query', self::GET);
	}


	/**
	 * @param $uuid
	 * @param $data
	 * @return Client
	 */
	public function put($uuid, $data): Client
	{
		return $this->request('/v1/query/' . $uuid, self::PUT, $data);
	}


	/**
	 * @param $uuid
	 * @return Client
	 */
	public function delete($uuid): Client
	{
		return $this->request('/v1/query/' . $uuid, self::DELETE);
	}


	/**
	 * @param $uuid
	 * @return Client
	 */
	public function get_uuid($uuid): Client
	{
		return $this->request('/v1/query/' . $uuid, self::GET);
	}


	/**
	 * @param $uuid
	 * @return Client
	 */
	public function get_uuid_execute($uuid): Client
	{
		return $this->request('/v1/query/' . $uuid . '/execute', self::GET);
	}


	/**
	 * @param $uuid
	 * @return Client
	 */
	public function get_uuid_explain($uuid): Client
	{
		return $this->request('/v1/query/' . $uuid . '/explain', self::GET);
	}


}
