<?php 
namespace Illuminate\Cloud\SAE\Cache;

use Illuminate\Support\Facades\Facade;

class KVDB extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'kvdb.connector'; }

}