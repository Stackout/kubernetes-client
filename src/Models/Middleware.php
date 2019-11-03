<?php

namespace Maclof\Kubernetes\Models;

class Middleware extends Model
{
    /**
	 * The api version.
	 *
	 * @var string
	 */
	protected $apiVersion = 'traefik.containo.us/v1alpha1';

	/**
	 * The schema.
	 *
	 * @var array
	 */
	protected $schema = [
        'kind' => 'Middleware'
    ];
}