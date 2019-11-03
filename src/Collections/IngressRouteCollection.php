<?php namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\IngressRoute;

class IngressRouteTCPCollection extends Collection
{
	/**
	 * The constructor.
	 *
	 * @param array $items
	 */
	public function __construct(array $items)
	{
		parent::__construct($this->getIngressRoutes($items));
	}

	/**
	 * Get an array of IngressRoutes.
	 *
	 * @param  array $items
	 * @return array
	 */
	protected function getIngressRoutes(array $items)
	{
		foreach ($items as &$item) {
			if ($item instanceof IngressRoute) {
				continue;
			}
			
			$item = new IngressRoute($item);
		}

		return $items;
	}
}
