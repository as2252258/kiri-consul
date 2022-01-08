<?php

namespace Kiri\Consul;

interface ConsulInterface
{


	/**
	 * @param string $serviceName
	 * @param string ...$tags
	 * @return mixed
	 */
	public function find(string $serviceName, string ...$tags): mixed;


	/**
	 * @param string $serviceName
	 * @param callable $callback
	 */
	public function subscribe(string $serviceName, callable $callback): void;


	/**
	 * @param string $serviceName
	 * @param callable $callback
	 */
	public function unsubscribe(string $serviceName, callable $callback): void;


	/**
	 * @param string $serviceName
	 * @param array $options
	 */
	public function register(string $serviceName, array $options = []): void;


	/**
	 * @param string $serviceName
	 */
	public function deregister(string $serviceName): void;

}
