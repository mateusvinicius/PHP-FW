<?php

namespace APP\Router;

class Route
{
    public $function;

    public function __construct(
        public string $method,
        public string $path,
        public \Closure $closure
    ) {
    }
}
