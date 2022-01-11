<?php

namespace Kiri\Consul\DiscoveryChain;

use Kiri\AsyncClient;
use Kiri\Consul\AbstractConsul;

class DiscoveryChain extends AbstractConsul
{


	/**
	 * @param $node
	 * @return AsyncClient
	 */
	public function get_discovery_chain_node($node): AsyncClient
	{
		return $this->request('/v1/discovery-chain/' . $node, self::GET);
	}


	/**
	 * @param $node
	 * @param $data
	 * @return AsyncClient
	 */
	public function post_discovery_chain_node($node, $data): AsyncClient
	{
		return $this->request('/v1/discovery-chain/' . $node, self::POST, $data);
	}

}
