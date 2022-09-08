# php-invader

A simple package to access private properties and methods without the use of reflection.

```
composer require jessegall/invader
```

## Usage

```php
class ExampleClass
{
    private string $property = 'value';

    private function method(): string
    {
        return 'value';
    }
    
    private function methodWithArgs($arg1, $arg2): string
    {
        return 'value';
    }
}

$example = new ExampleClass();

invade($class)->property; // Access private property
invade($class)->property = 'new value'; // Set private property
invade($class)->method(); // Call private method
invade($class)->method('arg1', 'arg2'); // Call private method with arguments

# -- Or --

(new Invader($class))->property; // Access private property
(new Invader($class))->property = 'new value'; // Set private property
(new Invader($class))->method(...$args); // Call private method
(new Invader($class))->method('arg1', 'arg2'); // Call private method with arguments

```