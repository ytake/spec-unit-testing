<?php

/**
 * Class AcmeCrazyTest
 * @see \Acme\Crazy
 */
class AcmeCrazyTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Acme\Crazy */
    protected $application;

    protected function setUp()
    {
        $this->application = new \Acme\Crazy;
    }

    public function testCallReturnString()
    {
        $this->assertSame('hello', $this->application->call('hello'));
    }

    /**
     * @expectedException \Exception
     */
    public function testCallThrowException()
    {
        $this->application->call(null);
    }

    public function testCallReturnResult()
    {
        $this->assertSame('1', $this->application->call('1'));
        $this->assertSame('2', $this->application->call('2'));
        $this->assertSame('aho', $this->application->call('3'));
        $this->assertSame('4', $this->application->call('4'));
        $this->assertSame('aho', $this->application->call('6'));
        $this->assertSame('10', $this->application->call('10'));
        $this->assertSame('aho', $this->application->call('13'));
    }

}
