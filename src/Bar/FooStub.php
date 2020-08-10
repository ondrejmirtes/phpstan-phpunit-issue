<?php

declare(strict_types=1);

namespace TestRepo\Bar;

/**
 * Class for testing FooAbstract.
 */
final class FooStub extends FooAbstract
{
    public function getPrefix(): string
    {
        return 'some_prefix';
    }

    public function getValueProxy(): string
    {
        return $this->getValue();
    }
}