<?php

interface CacheInterface
{
    public function set(string $key, $value);
    public function get(string $key);
    public function invalidate(string $key);
}