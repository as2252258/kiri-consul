<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\AbstractConsul;
use Kiri\Client;

class Keyring extends AbstractConsul
{

	/**
	 * @return Client
	 */
	public function keyring(): Client
	{
		return $this->request('/v1/operator/keyring', self::GET);License
	}


	/**
	 * @param string $key
	 * @return Client
	 */
	public function post_keyring(string $key): Client
	{
		return $this->request('/v1/operator/keyring', self::POST, ['Key' => $key]);
	}


	/**
	 * @param string $key
	 * @return Client
	 */
	public function put_keyring(string $key): Client
	{
		return $this->request('/v1/operator/keyring', self::PUT, ['Key' => $key]);
	}


	/**
	 * @param string $key
	 * @return Client
	 */
	public function delete_keyring(string $key): Client
	{
		return $this->request('/v1/operator/keyring', self::DELETE, ['Key' => $key]);
	}


}
