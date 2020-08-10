<?php

declare(strict_types=1);

namespace TestRepo\Bar;

/**
 * Test abstract class.
 */
abstract class FooAbstract
{
    abstract public function getPrefix(): string;

    protected function getValue(): string
    {
        return "some_value {$this->getUid()}";
    }

    public function getUid(): string
    {
        return uniqid('', true);
    }
}