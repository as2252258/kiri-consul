<?php

namespace Kiri\Consul\Operator;

use Kiri\AsyncClient;
use Kiri\Consul\AbstractConsul;

class Area extends AbstractConsul
{


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function post_area($data): AsyncClient
	{
		return $this->request('/v1/operator/area', self::POST, $data);
	}


	/**
	 * @return AsyncClient
	 */
	public function get_area(): AsyncClient
	{
		return $this->request('/v1/operator/area', self::GET);
	}


	/**
	 * @param $node
	 * @param $data
	 * @return AsyncClient
	 */
	public function put_area($node, $data): AsyncClient
	{
		return $this->request('/v1/operator/area/' . $node, self::PUT, $data);
	}


	/**
	 * @param $node
	 * @return AsyncClient
	 */
	public function get_area_node($node): AsyncClient
	{
		return $this->request('/v1/operator/area/' . $node, self::GET);
	}


	/**
	 * @param $node
	 * @return AsyncClient
	 */
	public function delete_area_node($node): AsyncClient
	{
		return $this->request('/v1/operator/area/' . $node, self::DELETE);
	}


	/**
	 * @param $node
	 * @param $data
	 * @return AsyncClient
	 */
	public function join($node, $data): AsyncClient
	{
		return $this->request('/v1/operator/area/' . $node . '/join', self::PUT, $data);
	}


	/**
	 * @param $node
	 * @return AsyncClient
	 */
	public function members($node): AsyncClient
	{
		return $this->request('/v1/operator/area/' . $node . '/members', self::GET);
	}


}
