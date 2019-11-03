<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\IngressRouteCollection;

class IngressRouteRepository extends Repository
{
	protected $uri = 'ingressroutes';

	protected function createCollection($response)
	{
		return new IngressRouteCollection($response['items']);
	}
}
