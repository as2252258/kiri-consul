<?php

namespace Kiri\Consul;

use Kiri\Abstracts\Component;


class ConsulProvider extends Component implements ConsulInterface
{


	/**
	 * @param string $serviceName
	 * @param string ...$tags
	 * @return mixed
	 */
	public function find(string $serviceName, string ...$tags): mixed
	{
		// TODO: Implement find() method.
	}


	/**
	 * @param string $serviceName
	 * @param callable $callback
	 */
	public function subscribe(string $serviceName, callable $callback): void
	{
		// TODO: Implement subscribe() method.
	}


	/**
	 * @param string $serviceName
	 * @param callable $callback
	 */
	public function unsubscribe(string $serviceName, callable $callback): void
	{
		// TODO: Implement unsubscribe() method.
	}


	/**
	 * @param string $serviceName
	 * @param array $options
	 */
	public function register(string $serviceName, array $options = []): void
	{
		// TODO: Implement register() method.
	}


	/**
	 * @param string $serviceName
	 */
	public function deregister(string $serviceName): void
	{
		// TODO: Implement deregister() method.
	}
}
