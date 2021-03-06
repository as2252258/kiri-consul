<?php

namespace Kiri\Consul\Catalog;

use Kiri\Client;
use Kiri\Consul\AbstractConsul;

class Catalog extends AbstractConsul
{


	/**
	 * @param array $options
	 * @return Client
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
	]): Client
	{
		return $this->request('/v1/catalog/register', self::PUT, $options);
	}


	/**
	 * @param array $service_id
	 * @return Client
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function deregister(array $service_id): Client
	{
		return $this->request('/v1/catalog/deregister', self::PUT, $service_id);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function datacenters(): Client
	{
		return $this->request('/v1/catalog/datacenters', self::GET);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function nodes(): Client
	{
		return $this->request('/v1/catalog/nodes', self::GET);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function services(): Client
	{
		return $this->request('/v1/catalog/services', self::GET);
	}


	/**
	 * @param $id
	 * @return Client
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function service($id): Client
	{
		return $this->request('/v1/catalog/service/' . $id, self::GET);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function connect(): Client
	{
		return $this->request('/v1/catalog/connect', self::GET);
	}


	/**
	 * @param $id
	 * @return Client
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function node($id): Client
	{
		return $this->request('/v1/catalog/node/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @return Client
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function node_services($id): Client
	{
		return $this->request('/v1/catalog/node-services/' . $id, self::GET);
	}


	/**
	 * @param $id
	 * @return Client
	 * @see https://www.consul.io/api-docs/catalog
	 */
	public function gateway_services($id): Client
	{
		return $this->request('/v1/catalog/gateway-services/' . $id, self::GET);
	}


}
