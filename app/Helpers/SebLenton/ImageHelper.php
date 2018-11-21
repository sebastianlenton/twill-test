<?php

/**
 * ImageHelper
 * 
 * Static class to render images
 */

namespace App\Helpers\SebLenton;

class ImageHelper {

    /**
     * Renders an image
     * @param  string  $URL     image URL
     * @param  string $altText  image alt text, optional
     * @param  string $classes  image classes, optional. If not supplied a default will be used, 'fitLandscape'.
     * @return none             echoes output
     */
    public static function render( $URL, $altText = false, $classes = false ) {
        $HTMLAltText = '';

        //if classes not supplied, use the default class
        if($classes === false) {
            $classes = 'fitLandscape';
        }
        $HTMLclass = 'class="' . $classes . '"';

        if(gettype($altText) == 'string' && !empty($altText)) {
            $HTMLAltText = 'alt="' . $altText . '"';
        }
        echo '<img ' . $HTMLclass . ' src="' . $URL . '"' . $HTMLAltText . '>';
    }
}