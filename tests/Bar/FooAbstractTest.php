<?php

declare(strict_types=1);

namespace TestRepo\Bar;

use DG\BypassFinals;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Test fot FooAbstract.
 */
class FooAbstractTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        BypassFinals::enable();
    }

    /**
     * @return FooStub&MockObject
     */
    private function createFooMock()
    {
        return $this
            ->getMockBuilder(FooStub::class)
            ->setMethodsExcept(['getValueProxy'])
            ->setConstructorArgs([])
            ->getMock();
    }

    public function testGetValue(): void
    {
        $fooMock = $this->createFooMock();
        $fooMock
            ->method('getUid')
            ->willReturn('some_uid');

        $actual = $fooMock->getValueProxy();

        self::assertSame('some_value some_uid', $actual);
    }
}
