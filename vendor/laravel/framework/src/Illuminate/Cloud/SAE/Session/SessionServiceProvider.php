<?php 
namespace Illuminate\Cloud\SAE\Session;

use Illuminate\Session\SessionServiceProvider as DefaultSessionServiceProvider;

class SessionServiceProvider extends DefaultSessionServiceProvider {

	
	protected function registerSessionManager()
	{
		$this->app->singleton('session', function($app)
		{
		    return new SaeSessionManager($app);
		});
	}

}