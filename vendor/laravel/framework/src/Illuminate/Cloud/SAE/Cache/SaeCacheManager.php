<?php 
namespace Illuminate\Cloud\SAE\Cache;

use Illuminate\Cache\CacheManager;

class SaeCacheManager extends CacheManager {

	/**
	 * Create an instance of the Memcache cache driver.
	 *
	 */
	protected function createMemcacheDriver(array $config)
	{
		$memcache = $this->app['memcache.connector']->connect();

		return $this->repository(new MemcacheStore($memcache, $this->getPrefix($config)));
	}

	/**
	 * Create an instance of the Kvdb cache driver.
	 *
	 */
	protected function createKvdbDriver(array $config)
	{
		$kvdb = $this->app['kvdb.connector']->connect();

		return $this->repository(new KvdbStore($kvdb, $this->getPrefix($config)));
	}

}