<?php 
namespace Illuminate\Cloud\SAE\Log;

use Illuminate\Foundation\Bootstrap\ConfigureLogging as DefaultConfigureLogging;
use Illuminate\Cloud\SAE\Log\Writer;
use Monolog\Logger as Monolog;
use Illuminate\Contracts\Foundation\Application;

class ConfigureLogging extends DefaultConfigureLogging {
	/**
	 * Register the logger instance in the container.
	 *
	 * @param  \Illuminate\Contracts\Foundation\Application  $app
	 * @return Illuminate\Cloud\SAE\Log\Writer
	 */
	protected function registerLogger(Application $app)
	{
	    $app->instance('log', $log = new Writer(
	        new Monolog($app->environment()), $app['events'])
	    );
	    return $log;
	}
}