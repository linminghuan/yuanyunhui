<?php 
namespace Illuminate\Cloud\SAE\Segment;

use Illuminate\Support\Facades\Facade;

class Segment extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'sae.segment'; }

}