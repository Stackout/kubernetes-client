<?php

namespace Maclof\Kubernetes\Models;

class TLSOption extends Model
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
        'kind' => 'TLSOption'
	];
}