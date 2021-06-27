<?php

namespace classes;

class Logger
{
    private static $instance;

    private function __construct() { }

    static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Logger();
        }

        return self::$instance;
    }

    public function log(String $text): void
    {
        echo '<br>' . $text . '<br>';
    }
}