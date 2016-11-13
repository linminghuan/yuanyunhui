<?php 
namespace Illuminate\Cloud\SAE\Cache;

use Illuminate\Cache\CacheServiceProvider;
use Illuminate\Cloud\SAE\Cache\MemcacheConnector;
use Illuminate\Cloud\SAE\Cache\KvdbConnector;

class SaeCacheServiceProvider extends CacheServiceProvider {
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * 在容器中注册绑定。
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('cache', function ($app) {
            return new SaeCacheManager($app);
        });

        $this->app->singleton('cache.store', function ($app) {
            return $app['cache']->driver();
        });

        $this->app->singleton('memcache.connector', function () {
            return new MemcacheConnector;
        }); 

        $this->app->singleton('kvdb.connector', function () {
            return new KvdbConnector;
        }); 

        $this->registerCommands();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        $provides = parent::provides();
        array_push($provides, 'memcache.connector', 'kvdb.connector');
        return $provides;
    }

}