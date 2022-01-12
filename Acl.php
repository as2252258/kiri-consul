<?php

namespace Kiri\Consul;

use Exception;
use Kiri\Consul\Acl\Legacy;
use Kiri\Consul\Acl\Policy;
use Kiri\Consul\Acl\Roles;
use Kiri\Consul\Acl\Rules;
use Kiri\Consul\Acl\Tokens;
use Kiri;


/**
 * @property Acl\Acl $acl;
 * @property Acl\Auth $auth;
 * @property Legacy $legacy;
 * @property Policy $policy;
 * @property Roles $roles;
 * @property Rules $rules;
 * @property Tokens $tokens;
 */
class Acl
{


	const CLASS_MAPPING = [
		'acl'    => Acl\Acl::class,
		'auth'   => Acl\Auth::class,
		'legacy' => Acl\Legacy::class,
		'policy' => Acl\Policy::class,
		'roles'  => Acl\Roles::class,
		'rules'  => Acl\Rules::class,
		'tokens' => Acl\Tokens::class,
	];


	/**
	 * @param string $name
	 * @return mixed
	 * @throws Exception
	 */
	public function __get(string $name)
	{
		if (!isset(Acl::CLASS_MAPPING[$name])) {
			throw new Exception('Unknown set class properties.');
		}
		return Kiri::getDi()->get(Acl::CLASS_MAPPING[$name]);
	}

}
