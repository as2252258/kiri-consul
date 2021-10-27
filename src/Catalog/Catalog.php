<?php

namespace Kiri\Consul\Catalog;

use Psr\Http\Message\ResponseInterface;
use Kiri\Consul\Consul;

class Catalog extends Consul
{


	/**
	 * @param array $service_id
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function register(array $service_id): ResponseInterface
	{
		return $this->request('/v1/catalog/register', self::PUT, $service_id);
	}


	/**
	 * @param array $service_id
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function deregister(array $service_id): ResponseInterface
	{
		return $this->request('/v1/catalog/deregister', self::PUT, $service_id);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function datacenters(): ResponseInterface
	{
		return $this->request('/v1/catalog/datacenters', self::GET);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function nodes(): ResponseInterface
	{
		return $this->request('/v1/catalog/nodes', self::GET);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function services(): ResponseInterface
	{
		return $this->request('/v1/catalog/services', self::GET);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function service($id): ResponseInterface
	{
		return $this->request('/v1/catalog/service/' . $id, self::GET);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function connect(): ResponseInterface
	{
		return $this->request('/v1/catalog/connect', self::GET);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function node($id): ResponseInterface
	{
		return $this->request('/v1/catalog/node/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function node_services($id): ResponseInterface
	{
		return $this->request('/v1/catalog/node-services/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function gateway_services($id): ResponseInterface
	{
		return $this->request('/v1/catalog/gateway-services/' . $id, self::GET);
	}


}
