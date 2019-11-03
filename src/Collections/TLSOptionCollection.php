<?php namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\TLSOption;

class TLSOptionCollection extends Collection
{
	/**
	 * The constructor.
	 *
	 * @param array $items
	 */
	public function __construct(array $items)
	{
		parent::__construct($this->getTLSOptions($items));
	}

	/**
	 * Get an array of IngressRoutes.
	 *
	 * @param  array $items
	 * @return array
	 */
	protected function getTLSOptions(array $items)
	{
		foreach ($items as &$item) {
			if ($item instanceof TLSOption) {
				continue;
			}
			
			$item = new TLSOption($item);
		}

		return $items;
	}
}
