<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\IngressRouteTCPCollection;

class IngressRouteTCPRepository extends Repository
{
	protected $uri = 'ingressroutetcps';

	protected function createCollection($response)
	{
		return new IngressRouteTCPCollection($response['items']);
	}
}
