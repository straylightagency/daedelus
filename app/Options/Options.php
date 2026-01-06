<?php

namespace App\Options;

use Daedelus\Fields\Location;
use Daedelus\Theme\Config\Option as BaseOption;

/**
 *
 */
class Options extends BaseOption
{
	/** @var string|null */
	public ?string $slug = 'options';

	/** @var string */
	public string $name = 'Options';

	/**
	 * @param Location $location
	 *
	 * @return array
	 */
	public function fields( Location $location ): array
	{
		return [
		];
	}
}