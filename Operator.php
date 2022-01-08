<?php

namespace Kiri\Consul;


use Exception;
use Kiri\Kiri;

/**
 * @property Operator\Area $area
 * @property Operator\Autopilot $autopilot
 * @property Operator\Keyring $keyring
 * @property Operator\License $license
 * @property Operator\Raft $raft
 */
class Operator
{

	const CLASS_MAPPING = [
		'area'      => Operator\Area::class,
		'autopilot' => Operator\Autopilot::class,
		'keyring'   => Operator\Keyring::class,
		'license'   => Operator\License::class,
		'raft'      => Operator\Raft::class,
	];


	/**
	 * @param string $name
	 * @return mixed
	 * @throws Exception
	 */
	public function __get(string $name)
	{
		if (!isset(Operator::CLASS_MAPPING[$name])) {
			throw new Exception('Unknown set class properties.');
		}
		return Kiri::getDi()->get(Operator::CLASS_MAPPING[$name]);
	}

}
