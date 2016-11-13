<?php

namespace Illuminate\Cloud\SAE\Cache;

use RuntimeException;

class MemcacheConnector
{
    /**
     * Create a new Memcached connection.
     *
     * @param  array  $servers
     * @return \Memcached
     *
     * @throws \RuntimeException
     */
    public function connect()
    {
        $memcache = $this->getMemcache();

        if ($memcache->getVersion() === false) {
            throw new RuntimeException('Could not establish Memcached connection.');
        }

        return $memcache;
    }

    /**
     * Get a new Memcached instance.
     *
     * @return \Memcached
     */
    protected function getMemcache()
    {
        return memcache_init();
    }
}
