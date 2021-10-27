<?php

namespace Kiri\Consul\Coordinate;

use Psr\Http\Message\ResponseInterface;
use Kiri\Consul\Consul;

class Coordinate extends Consul
{


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function coordinate_datacenters(): ResponseInterface
	{
		return $this->request('/v1/coordinate/datacenters', self::GET);
	}


	/**
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function coordinate_nodes(): ResponseInterface
	{
		return $this->request('/v1/coordinate/nodes', self::GET);
	}


	/**
	 * @param $node
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function coordinate_node($node): ResponseInterface
	{
		return $this->request('/v1/coordinate/node/' . $node, self::GET);
	}


	/**
	 * @param $node
	 * @return ResponseInterface
	 * @see https://www.consul.io/api-docs/connect/ca
	 */
	public function coordinate_update($node): ResponseInterface
	{
		return $this->request('/v1/coordinate/update', self::PUT, $node);
	}


}
