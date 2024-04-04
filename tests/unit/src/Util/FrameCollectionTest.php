<?php

class FrameCollectionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Exception
     */
    protected $exception;

    /**
     * @var \Denosys\BooBoo\Util\FrameCollection
     */
    protected $container;

    protected function setUp(): void
    {
        $this->exception = new Exception;
        $this->container = new \Denosys\BooBoo\Util\FrameCollection($this->exception->getTrace());
    }

    public function testFrameOffsetFunctions()
    {
        $collection = $this->container;
        $this->assertTrue((bool)$collection->offsetExists(0));
        $this->assertFalse((bool)$collection->offsetExists(4000));
        $this->assertInstanceOf('Denosys\BooBoo\Util\Frame', $collection->offsetGet(0));
    }

    public function testFrameCountIsAccurate()
    {
        $count = count($this->exception->getTrace());
        $collection = $this->container;
        $this->assertEquals($count, $collection->count());
    }

    public function testOffsetSetRaisesException()
    {
        $this->expectException(\Exception::class);
        $collection = $this->container;
        $collection->offsetSet(1, 2);
    }

    public function testOffsetUnsetRaisesException()
    {
        $this->expectException(\Exception::class);
        $collection = $this->container;
        $collection->offsetUnset(1);
    }
}
