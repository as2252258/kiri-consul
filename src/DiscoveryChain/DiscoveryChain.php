<?php

namespace Kiri\Consul\DiscoveryChain;

use Psr\Http\Message\ResponseInterface;
use Kiri\Consul\Consul;

class DiscoveryChain extends Consul
{


	/**
	 * @param $node
	 * @return ResponseInterface
	 */
	public function get_discovery_chain_node($node): ResponseInterface
	{
		return $this->request('/v1/discovery-chain/' . $node, self::GET);
	}


	/**
	 * @param $node
	 * @param $data
	 * @return ResponseInterface
	 */
	public function post_discovery_chain_node($node, $data): ResponseInterface
	{
		return $this->request('/v1/discovery-chain/' . $node, self::POST, $data);
	}

}
