<?php 
namespace Illuminate\Cloud\SAE\Storage;

use Illuminate\Support\Facades\Facade;

class Storage extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'sae.storage'; }

}