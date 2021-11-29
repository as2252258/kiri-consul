<?php

namespace Kiri\Consul;

use Http\Client\Client;

class Connect extends Consul
{


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function connect_ca_roots(): Client
	{
		return $this->request('/v1/connect/ca/roots', self::GET);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_ca_configuration(): Client
	{
		return $this->request('/v1/connect/ca/configuration', self::GET);
	}


	/**
	 * @param $data
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function put_connect_ca_configuration($data): Client
	{
		return $this->request('/v1/connect/ca/configuration', self::PUT, $data);
	}


	/**
	 * @param $data
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function put_connect_intentions_exact($data): Client
	{
		return $this->request('/v1/connect/intentions/exact', self::PUT, $data);
	}


	/**
	 * @param $data
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function delete_connect_intentions_exact($data): Client
	{
		return $this->request('/v1/connect/intentions/exact', self::DELETE, $data);
	}


	/**
	 * @param $id
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function delete_connect_intention($id): Client
	{
		return $this->request('/v1/connect/intentions/exact/' . $id, self::DELETE);
	}


	/**
	 * @param mixed $data
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_intentions_exact(mixed $data = []): Client
	{
		return $this->request('/v1/connect/intentions/exact', self::GET, $data);
	}


	/**
	 * @param $id
	 * @param $data
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function put_connect_intentions($id, $data): Client
	{
		return $this->request('/v1/connect/intentions/' . $id, self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_intention($id): Client
	{
		return $this->request('/v1/connect/intentions/' . $id, self::GET);
	}


	/**
	 * @param $data
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function post_connect_intentions($data): Client
	{
		return $this->request('/v1/connect/intentions', self::POST, $data);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_intentions(): Client
	{
		return $this->request('/v1/connect/intentions', self::GET);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_intentions_check(): Client
	{
		return $this->request('/v1/connect/intentions/check', self::GET);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_intentions_match(): Client
	{
		return $this->request('/v1/connect/intentions/match', self::GET);
	}

}
