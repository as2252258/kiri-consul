<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Autopilot extends AbstractConsul
{


	/**
	 * @return AsyncClient
	 */
	public function configuration(): AsyncClient
	{
		return $this->request('/v1/operator/autopilot/configuration', self::GET);
	}


	/**
	 * @param $data
	 * @return AsyncClient
	 */
	public function put_configuration($data): AsyncClient
	{
		return $this->request('/v1/operator/autopilot/configuration', self::PUT, $data);
	}


	/**
	 * @return AsyncClient
	 */
	public function health(): AsyncClient
	{
		return $this->request('/v1/operator/autopilot/health', self::GET);
	}



	/**
	 * @return AsyncClient
	 */
	public function state(): AsyncClient
	{
		return $this->request('/v1/operator/autopilot/state', self::GET);
	}

}
