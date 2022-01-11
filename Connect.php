<?php

namespace Kiri\Consul;

use Kiri\AsyncClient;

class Connect extends AbstractConsul
{


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function connect_ca_roots(): AsyncClient
	{
		return $this->request('/v1/connect/ca/roots', self::GET);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_ca_configuration(): AsyncClient
	{
		return $this->request('/v1/connect/ca/configuration', self::GET);
	}


	/**
	 * @param $data
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function put_connect_ca_configuration($data): AsyncClient
	{
		return $this->request('/v1/connect/ca/configuration', self::PUT, $data);
	}


	/**
	 * @param $data
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function put_connect_intentions_exact($data): AsyncClient
	{
		return $this->request('/v1/connect/intentions/exact', self::PUT, $data);
	}


	/**
	 * @param $data
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function delete_connect_intentions_exact($data): AsyncClient
	{
		return $this->request('/v1/connect/intentions/exact', self::DELETE, $data);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function delete_connect_intention($id): AsyncClient
	{
		return $this->request('/v1/connect/intentions/exact/' . $id, self::DELETE);
	}


	/**
	 * @param mixed $data
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_intentions_exact(mixed $data = []): AsyncClient
	{
		return $this->request('/v1/connect/intentions/exact', self::GET, $data);
	}


	/**
	 * @param $id
	 * @param $data
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function put_connect_intentions($id, $data): AsyncClient
	{
		return $this->request('/v1/connect/intentions/' . $id, self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_intention($id): AsyncClient
	{
		return $this->request('/v1/connect/intentions/' . $id, self::GET);
	}


	/**
	 * @param $data
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function post_connect_intentions($data): AsyncClient
	{
		return $this->request('/v1/connect/intentions', self::POST, $data);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_intentions(): AsyncClient
	{
		return $this->request('/v1/connect/intentions', self::GET);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_intentions_check(): AsyncClient
	{
		return $this->request('/v1/connect/intentions/check', self::GET);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_intentions_match(): AsyncClient
	{
		return $this->request('/v1/connect/intentions/match', self::GET);
	}

}
