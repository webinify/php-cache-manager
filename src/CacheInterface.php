<?php

namespace Webinify\CacheManager;

interface CacheInterface {


    /**
     * get From cache
     *
     * @param string $key
     * @param callable|null $cache_cb
     * @param integer $flags
     * @return void
     */
    public function get(string $key, callable $cache_cb = null, $flags = 0);


  
    /**
     * Delete from cache 
     *
     * @param string $key
     * @return void
     */
    public function delete(string $key, $time = 0);

    /**
     * Set somethin to mixed data
     *
     * @param string $key
     * @param mixed $data
     * @return void
     */
    public function set(string $key, $data);


    /**
     * Update the memcached data
     *
     * @param string $key
     * @param mixed $newData
     * @return void
     */
    public function update(string $key, $newData);
}