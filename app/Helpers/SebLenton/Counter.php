<?php

namespace App\Helpers\SebLenton;

class Counter {
    private static $count = 0;

    public static function inc() {
        static::$count++;
    }

    public static function get() {
        return static::$count;
    }
}