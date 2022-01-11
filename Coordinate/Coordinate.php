<?php

namespace Kiri\Consul\Coordinate;

use Kiri\AsyncClient;
use Kiri\Consul\AbstractConsul;

class Coordinate extends AbstractConsul
{


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function coordinate_datacenters(): AsyncClient
	{
		return $this->request('/v1/coordinate/datacenters', self::GET);
	}


	/**
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function coordinate_nodes(): AsyncClient
	{
		return $this->request('/v1/coordinate/nodes', self::GET);
	}


	/**
	 * @param $node
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function coordinate_node($node): AsyncClient
	{
		return $this->request('/v1/coordinate/node/' . $node, self::GET);
	}


	/**
	 * @param $node
	 * @return AsyncClient
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function coordinate_update($node): AsyncClient
	{
		return $this->request('/v1/coordinate/update', self::PUT, $node);
	}


}
