<?php

/**
 * Counter
 *
 * Keeps a count across blade views.
 */

namespace App\Helpers\SebLenton;

class Counter {
    private static $count = 0;

    /**
     * add the given amount on
     * @param  int $quant       amount to add
     * @return void
     */
    public static function inc($quant) {
        static::$count+=$quant;
    }

    /**
     * return the amount
     * @return int
     */
    public static function get() {
        return static::$count;
    }
}