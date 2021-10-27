<?php

namespace Kiri\Consul\Operator;

use Kiri\Consul\Consul;
use Psr\Http\Message\ResponseInterface;

class Keyring extends Consul
{

	/**
	 * @return ResponseInterface
	 */
	public function keyring(): ResponseInterface
	{
		return $this->request('/v1/operator/keyring', self::GET);License
	}


	/**
	 * @param string $key
	 * @return ResponseInterface
	 */
	public function post_keyring(string $key): ResponseInterface
	{
		return $this->request('/v1/operator/keyring', self::POST, ['Key' => $key]);
	}


	/**
	 * @param string $key
	 * @return ResponseInterface
	 */
	public function put_keyring(string $key): ResponseInterface
	{
		return $this->request('/v1/operator/keyring', self::PUT, ['Key' => $key]);
	}


	/**
	 * @param string $key
	 * @return ResponseInterface
	 */
	public function delete_keyring(string $key): ResponseInterface
	{
		return $this->request('/v1/operator/keyring', self::DELETE, ['Key' => $key]);
	}


}
