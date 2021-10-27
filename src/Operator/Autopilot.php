<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Autopilot extends Consul
{


	/**
	 * @return ResponseInterface
	 */
	public function configuration(): ResponseInterface
	{
		return $this->request('/v1/operator/autopilot/configuration', self::GET);
	}


	/**
	 * @param $data
	 * @return ResponseInterface
	 */
	public function put_configuration($data): ResponseInterface
	{
		return $this->request('/v1/operator/autopilot/configuration', self::PUT, $data);
	}


	/**
	 * @return ResponseInterface
	 */
	public function health(): ResponseInterface
	{
		return $this->request('/v1/operator/autopilot/health', self::GET);
	}



	/**
	 * @return ResponseInterface
	 */
	public function state(): ResponseInterface
	{
		return $this->request('/v1/operator/autopilot/state', self::GET);
	}

}
