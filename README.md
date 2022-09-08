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

invade($example)->property; // Access private property
invade($example)->property = 'new value'; // Set private property
invade($example)->method(); // Call private method
invade($example)->methodWithArgs('arg1', 'arg2'); // Call private method with arguments

# -- Or --

(new Invader($example))->property; // Access private property
(new Invader($example))->property = 'new value'; // Set private property
(new Invader($example))->method(); // Call private method
(new Invader($example))->methodWithArgs('arg1', 'arg2'); // Call private method with arguments

```
