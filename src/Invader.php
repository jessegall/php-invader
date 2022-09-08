<?php

namespace JesseGall\Invader;

/**
 * @template T of object
 */
class Invader
{

    /**
     * The target to invade
     *
     * @var T
     */
    private object $target;

    /**
     * @param T $target
     */
    public function __construct(object $target)
    {
        $this->target = $target;
    }

    public function __call(string $method, array $parameters): mixed
    {
        return (fn() => $this->{$method}(...$parameters))->call($this->target);
    }

    public function __get(string $property): mixed
    {
        return (fn() => $this->{$property})->call($this->target);
    }

    public function __set(string $property, mixed $value): void
    {
        (fn() => $this->{$property} = $value)->call($this->target);
    }

}