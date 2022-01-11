<?php

namespace Kiri\Consul\Catalog;

use Kiri\AsyncClient;
use Kiri\Consul\AbstractConsul;

class Catalog extends AbstractConsul
{


	/**
	 * @param array $options
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function register(array $options = [
		'ID'              => '',
		'Node'            => '',
		'Address'         => '',
		'Datacenter'      => '',
		'TaggedAddresses' => [],
		'NodeMeta'        => [],
		'Service'         => [],
		'Check'           => [],
		'SkipNodeUpdate'  => false
	]): AsyncClient
	{
		return $this->request('/v1/catalog/register', self::PUT, $options);
	}


	/**
	 * @param array $service_id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function deregister(array $service_id): AsyncClient
	{
		return $this->request('/v1/catalog/deregister', self::PUT, $service_id);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function datacenters(): AsyncClient
	{
		return $this->request('/v1/catalog/datacenters', self::GET);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function nodes(): AsyncClient
	{
		return $this->request('/v1/catalog/nodes', self::GET);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function services(): AsyncClient
	{
		return $this->request('/v1/catalog/services', self::GET);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function service($id): AsyncClient
	{
		return $this->request('/v1/catalog/service/' . $id, self::GET);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function connect(): AsyncClient
	{
		return $this->request('/v1/catalog/connect', self::GET);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function node($id): AsyncClient
	{
		return $this->request('/v1/catalog/node/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function node_services($id): AsyncClient
	{
		return $this->request('/v1/catalog/node-services/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function gateway_services($id): AsyncClient
	{
		return $this->request('/v1/catalog/gateway-services/' . $id, self::GET);
	}


}
