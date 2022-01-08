<?php

namespace Kiri\Consul\Operator;

use Http\Client\Client;
use Kiri\Consul\AbstractConsul;

class Area extends AbstractConsul
{


	/**
	 * @param $data
	 * @return Client
	 */
	public function post_area($data): Client
	{
		return $this->request('/v1/operator/area', self::POST, $data);
	}


	/**
	 * @return Client
	 */
	public function get_area(): Client
	{
		return $this->request('/v1/operator/area', self::GET);
	}


	/**
	 * @param $node
	 * @param $data
	 * @return Client
	 */
	public function put_area($node, $data): Client
	{
		return $this->request('/v1/operator/area/' . $node, self::PUT, $data);
	}


	/**
	 * @param $node
	 * @return Client
	 */
	public function get_area_node($node): Client
	{
		return $this->request('/v1/operator/area/' . $node, self::GET);
	}


	/**
	 * @param $node
	 * @return Client
	 */
	public function delete_area_node($node): Client
	{
		return $this->request('/v1/operator/area/' . $node, self::DELETE);
	}


	/**
	 * @param $node
	 * @param $data
	 * @return Client
	 */
	public function join($node, $data): Client
	{
		return $this->request('/v1/operator/area/' . $node . '/join', self::PUT, $data);
	}


	/**
	 * @param $node
	 * @return Client
	 */
	public function members($node): Client
	{
		return $this->request('/v1/operator/area/' . $node . '/members', self::GET);
	}


}
