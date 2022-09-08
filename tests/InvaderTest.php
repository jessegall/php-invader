<?php

use JesseGall\Invader\Invader;
use PHPUnit\Framework\TestCase;

class InvaderTest extends TestCase
{

    public function test_can_access_private_property()
    {
        $target = new class {
            private string $property = 'expected';
        };

        $invader = new Invader($target);

        $this->assertEquals('expected', $invader->property);
    }

    public function test_can_set_private_property()
    {
        $target = new class {
            private string $property = 'initial';

            public function getProperty(): string
            {
                return $this->property;
            }
        };

        $invader = new Invader($target);

        $invader->property = 'expected';

        $this->assertEquals('expected', $target->getProperty());
    }

    public function test_can_call_private_method()
    {
        $target = new class {
            private function method(int $a, int $b): string
            {
                return $a + $b;
            }
        };

        $invader = new Invader($target);

        $this->assertEquals(5, $invader->method(2, 3));
    }

    public function test_helper_method_returns_invader()
    {
        $this->assertInstanceOf(Invader::class, invade(new stdClass()));
    }

}