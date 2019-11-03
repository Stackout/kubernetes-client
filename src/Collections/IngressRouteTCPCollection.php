<?php namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\IngressRouteTCP;

class IngressRouteTCPCollection extends Collection
{
	/**
	 * The constructor.
	 *
	 * @param array $items
	 */
	public function __construct(array $items)
	{
		parent::__construct($this->getIngressRouteTCP($items));
	}

	/**
	 * Get an array of IngressRouteTCPs.
	 *
	 * @param  array $items
	 * @return array
	 */
	protected function getIngressRouteTCP(array $items)
	{
		foreach ($items as &$item) {
			if ($item instanceof IngressRouteTCP) {
				continue;
			}
			
			$item = new IngressRouteTCP($item);
		}

		return $items;
	}
}
