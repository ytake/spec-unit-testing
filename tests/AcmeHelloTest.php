<?php

/**
 * Class AcmeHelloTest
 * @see \Acme\Hello
 */
class AcmeHelloTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Acme\Hello */
    protected $hello;

    protected function setUp()
    {
        $this->hello = new \Acme\Hello;
    }

    public function testCallReturnString()
    {
        $this->assertSame('hello', $this->hello->call('hello'));
    }

    /**
     * @expectedException \Exception
     */
    public function testCallThrowException()
    {
        $this->hello->call(null);
    }

    public function testCallReturnResult()
    {
        $this->assertSame('1', $this->hello->call('1'));
        $this->assertSame('2', $this->hello->call('2'));
        $this->assertSame('aho', $this->hello->call('3'));
        $this->assertSame('4', $this->hello->call('4'));
        $this->assertSame('aho', $this->hello->call('6'));
        $this->assertSame('10', $this->hello->call('10'));
        $this->assertSame('aho', $this->hello->call('13'));
    }
}
