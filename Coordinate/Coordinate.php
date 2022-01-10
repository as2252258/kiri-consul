<?php

namespace Kiri\Consul\Coordinate;

use Kiri\Client;
use Kiri\Consul\AbstractConsul;

class Coordinate extends AbstractConsul
{


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function coordinate_datacenters(): Client
	{
		return $this->request('/v1/coordinate/datacenters', self::GET);
	}


	/**
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function coordinate_nodes(): Client
	{
		return $this->request('/v1/coordinate/nodes', self::GET);
	}


	/**
	 * @param $node
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function coordinate_node($node): Client
	{
		return $this->request('/v1/coordinate/node/' . $node, self::GET);
	}


	/**
	 * @param $node
	 * @return Client
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function coordinate_update($node): Client
	{
		return $this->request('/v1/coordinate/update', self::PUT, $node);
	}


}
