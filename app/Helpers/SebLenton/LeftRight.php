<?php

/**
 * LeftRight
 * 
 * This is used to keep track of whether items on the design page, or perhaps elsewhere, should be aligned to the left or the right
 */

namespace App\Helpers\SebLenton;

class LeftRight {
    private static $direction = 'left';

    /**
     * set the direction
     * @param [type] $newDir [description]
     */
    public static function set($newDir) {
        if( $newDir == 'left' || $newDir == 'right' ) {
            static::$direction = $newDir;
        } else {
            throw new Exception('LeftRight->set: value given was not left or right');
        }
    }

    /**
     * if direction is right, set to left and vice versa
     * @return void
     */
    public static function step() {
        if( static::$direction == 'left' ) {
            static::$direction = 'right';
        } else if( static::$direction == 'right' ) {
            static::$direction = 'left';
        } else {
            throw new Exception('LeftRight->step: value given was not left or right');
        }
    }

    /**
     * return the direction
     * @return string       should be 'left' or 'right'
     */
    public static function get() {
        return static::$direction;
    }
}