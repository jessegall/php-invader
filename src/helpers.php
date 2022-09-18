<?php

use JesseGall\Invader\Invader;

if (! function_exists('invade')) {
    /**
     * @return object
     */
    function invade(object $target)
    {
        return new Invader($target);
    }
}
