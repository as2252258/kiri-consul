<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\AbstractConsul;
use Kiri\AsyncClient;

class Keyring extends AbstractConsul
{

	/**
	 * @return AsyncClient
	 */
	public function keyring(): AsyncClient
	{
		return $this->request('/v1/operator/keyring', self::GET);License
	}


	/**
	 * @param string $key
	 * @return AsyncClient
	 */
	public function post_keyring(string $key): AsyncClient
	{
		return $this->request('/v1/operator/keyring', self::POST, ['Key' => $key]);
	}


	/**
	 * @param string $key
	 * @return AsyncClient
	 */
	public function put_keyring(string $key): AsyncClient
	{
		return $this->request('/v1/operator/keyring', self::PUT, ['Key' => $key]);
	}


	/**
	 * @param string $key
	 * @return AsyncClient
	 */
	public function delete_keyring(string $key): AsyncClient
	{
		return $this->request('/v1/operator/keyring', self::DELETE, ['Key' => $key]);
	}


}
