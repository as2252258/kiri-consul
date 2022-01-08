<?php

namespace Kiri\Consul;


use Exception;
use Kiri\Kiri;

/**
 * @property Agent\Agent $agent
 * @property Agent\Checks $checks
 * @property Agent\Connect $connect
 * @property Agent\Service $service
 */
class Agent
{


	const CLASS_MAPPING = [
		'agent'   => Agent\Agent::class,
		'checks'  => Agent\Checks::class,
		'connect' => Agent\Connect::class,
		'service' => Agent\Service::class,
	];


	/**
	 * @param string $name
	 * @return mixed
	 * @throws Exception
	 */
	public function __get(string $name)
	{
		if (!isset(Agent::CLASS_MAPPING[$name])) {
			throw new Exception('Unknown set class properties.');
		}
		return Kiri::getDi()->get(Agent::CLASS_MAPPING[$name]);
	}

}
