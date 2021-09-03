<?php

namespace Webinify\CacheManager;

use \Memcached;

class CacheManager implements CacheInterface
{

    /**
     * Instance of MemCached
     *
     * @var Memcached|null
     */
    private ?Memcached $memCached;

    public function __construct()
    {
        $this->memCached = new Memcached();
    }

    public function setServer(string $host, $port, $weight = 0): self
    {
        $this->memCached->addServer($host, $port, $weight);
        return $this;
    }

    public function get(string $key, callable $cache_cb = null, $flags = 0)
    {
        return $this->memCached->get($key, $cache_cb, $flags);
    }

    public function delete(string $key, $time = 0)
    {
        $this->memCached->delete($key, $time);
    }

    public function set(string $key, $data, $expiration = 0, $udf_flags = 0)
    {
        $this->memCached->add($key, $data, $expiration, $udf_flags);
    }
}
