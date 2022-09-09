<?php

use JesseGall\Invader\Invader;

if (! function_exists('invade')) {
    /**
     * @template T of object
     * @param T $target
     * @return T
     */
    function invade(object $target)
    {
        return new Invader($target);
    }
}
