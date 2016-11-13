<?php 
namespace Illuminate\Cloud\SAE;

use App\Http\Kernel as DefaultKernel;

class Kernel extends DefaultKernel{
	/**
	 * The bootstrap classes for the application.
	 *
	 * @var array
	 */
	protected $bootstrappers = [
	    'Illuminate\Foundation\Bootstrap\DetectEnvironment',
	    'Illuminate\Foundation\Bootstrap\LoadConfiguration',
	    'Illuminate\Cloud\SAE\Log\ConfigureLogging',
	    'Illuminate\Foundation\Bootstrap\HandleExceptions',
	    'Illuminate\Foundation\Bootstrap\RegisterFacades',
	    'Illuminate\Foundation\Bootstrap\RegisterProviders',
	    'Illuminate\Foundation\Bootstrap\BootProviders',
	];
}