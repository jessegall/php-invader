<?php

use JesseGall\Invader\Invader;

if (! function_exists('invade')) {
    /**
     * @template T of object
     * @param object $target
     * @return Invader<T>
     */
    function invade(object $target): Invader
    {
        return new Invader($target);
    }
}
