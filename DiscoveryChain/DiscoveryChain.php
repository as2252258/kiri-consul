<?php

namespace Kiri\Consul\DiscoveryChain;

use Http\Client\Client;
use Kiri\Consul\AbstractConsul;

class DiscoveryChain extends AbstractConsul
{


	/**
	 * @param $node
	 * @return Client
	 */
	public function get_discovery_chain_node($node): Client
	{
		return $this->request('/v1/discovery-chain/' . $node, self::GET);
	}


	/**
	 * @param $node
	 * @param $data
	 * @return Client
	 */
	public function post_discovery_chain_node($node, $data): Client
	{
		return $this->request('/v1/discovery-chain/' . $node, self::POST, $data);
	}

}
