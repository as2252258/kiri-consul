<?php

namespace Kiri\Consul;

use Psr\Http\Message\ResponseInterface;

class Connect extends Consul
{


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function connect_ca_roots(): ResponseInterface
	{
		return $this->request('/v1/connect/ca/roots', self::GET);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_ca_configuration(): ResponseInterface
	{
		return $this->request('/v1/connect/ca/configuration', self::GET);
	}


	/**
	 * @param $data
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function put_connect_ca_configuration($data): ResponseInterface
	{
		return $this->request('/v1/connect/ca/configuration', self::PUT, $data);
	}


	/**
	 * @param $data
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function put_connect_intentions_exact($data): ResponseInterface
	{
		return $this->request('/v1/connect/intentions/exact', self::PUT, $data);
	}


	/**
	 * @param $data
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function delete_connect_intentions_exact($data): ResponseInterface
	{
		return $this->request('/v1/connect/intentions/exact', self::DELETE, $data);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function delete_connect_intention($id): ResponseInterface
	{
		return $this->request('/v1/connect/intentions/exact/' . $id, self::DELETE);
	}


	/**
	 * @param mixed $data
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_intentions_exact(mixed $data = []): ResponseInterface
	{
		return $this->request('/v1/connect/intentions/exact', self::GET, $data);
	}


	/**
	 * @param $id
	 * @param $data
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function put_connect_intentions($id, $data): ResponseInterface
	{
		return $this->request('/v1/connect/intentions/' . $id, self::PUT, $data);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_intention($id): ResponseInterface
	{
		return $this->request('/v1/connect/intentions/' . $id, self::GET);
	}


	/**
	 * @param $data
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function post_connect_intentions($data): ResponseInterface
	{
		return $this->request('/v1/connect/intentions', self::POST, $data);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_intentions(): ResponseInterface
	{
		return $this->request('/v1/connect/intentions', self::GET);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_intentions_check(): ResponseInterface
	{
		return $this->request('/v1/connect/intentions/check', self::GET);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function get_connect_intentions_match(): ResponseInterface
	{
		return $this->request('/v1/connect/intentions/match', self::GET);
	}

}
