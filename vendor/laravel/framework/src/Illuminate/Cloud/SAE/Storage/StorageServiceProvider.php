<?php 
namespace Illuminate\Cloud\SAE\Storage;

use Illuminate\Support\ServiceProvider;
use SaeStorage;

class StorageServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('sae.storage', function($app)
		{
		    return new SaeStorage();
		});

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['sae.storage'];
	}

}