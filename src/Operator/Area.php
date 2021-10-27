<?php

namespace Kiri\Consul\Operator;

use Psr\Http\Message\ResponseInterface;
use Kiri\Consul\Consul;

class Area extends Consul
{


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function post_area($data): ResponseInterface
	{
		return $this->request('/v1/operator/area', self::POST, $data);
	}


	/**
	 * @return ResponseInterface
	 */
	public function get_area(): ResponseInterface
	{
		return $this->request('/v1/operator/area', self::GET);
	}


	/**
	 * @param $node
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put_area($node, $data): ResponseInterface
	{
		return $this->request('/v1/operator/area/' . $node, self::PUT, $data);
	}


	/**
	 * @param $node
	 * @return ResponseInterface
	 */
	public function get_area_node($node): ResponseInterface
	{
		return $this->request('/v1/operator/area/' . $node, self::GET);
	}


	/**
	 * @param $node
	 * @return ResponseInterface
	 */
	public function delete_area_node($node): ResponseInterface
	{
		return $this->request('/v1/operator/area/' . $node, self::DELETE);
	}


	/**
	 * @param $node
	 * @param $data
	 * @return ResponseInterface
	 */
	public function join($node, $data): ResponseInterface
	{
		return $this->request('/v1/operator/area/' . $node . '/join', self::PUT, $data);
	}


	/**
	 * @param $node
	 * @return ResponseInterface
	 */
	public function members($node): ResponseInterface
	{
		return $this->request('/v1/operator/area/' . $node . '/members', self::GET);
	}


}
