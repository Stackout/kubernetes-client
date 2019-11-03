<?php namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\Middleware;

class MiddlewareCollection extends Collection
{
	/**
	 * The constructor.
	 *
	 * @param array $items
	 */
	public function __construct(array $items)
	{
		parent::__construct($this->getMiddlewares($items));
	}

	/**
	 * Get an array of Middlewares.
	 *
	 * @param  array $items
	 * @return array
	 */
	protected function getMiddlewares(array $items)
	{
		foreach ($items as &$item) {
			if ($item instanceof Middleware) {
				continue;
			}
			
			$item = new Middleware($item);
		}

		return $items;
	}
}
