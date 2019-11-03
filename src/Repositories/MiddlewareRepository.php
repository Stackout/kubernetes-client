<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\MiddlewareCollection;

class MiddlewareRepository extends Repository
{
	protected $uri = 'middlewares';

	protected function createCollection($response)
	{
		return new MiddlewareCollection($response['items']);
	}
}
