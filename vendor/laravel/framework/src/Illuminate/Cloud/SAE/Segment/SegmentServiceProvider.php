<?php 
namespace Illuminate\Cloud\SAE\Segment;

use Illuminate\Support\ServiceProvider;
use SaeSegment;

class SegmentServiceProvider extends ServiceProvider {

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
		$this->app->singleton('sae.segment', function($app)
		{
		    return new SaeSegment();
		});

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['sae.segment'];
	}

}