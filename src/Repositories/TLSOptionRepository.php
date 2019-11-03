<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\TLSOptionCollection;

class TLSOptionRepository extends Repository
{
	protected $uri = 'tlsoptions';

	protected function createCollection($response)
	{
		return new TLSOptionCollection($response['items']);
	}
}
