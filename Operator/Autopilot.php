<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\AbstractConsul;
use Kiri\Client;

class Autopilot extends AbstractConsul
{


	/**
	 * @return Client
	 */
	public function configuration(): Client
	{
		return $this->request('/v1/operator/autopilot/configuration', self::GET);
	}


	/**
	 * @param $data
	 * @return Client
	 */
	public function put_configuration($data): Client
	{
		return $this->request('/v1/operator/autopilot/configuration', self::PUT, $data);
	}


	/**
	 * @return Client
	 */
	public function health(): Client
	{
		return $this->request('/v1/operator/autopilot/health', self::GET);
	}



	/**
	 * @return Client
	 */
	public function state(): Client
	{
		return $this->request('/v1/operator/autopilot/state', self::GET);
	}

}
