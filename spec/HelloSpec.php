<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HelloSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\Hello');
    }

    function it_should_return_string()
    {
        $this->call('hello')->shouldBe('hello');
    }

    function it_return_string_1_for_1()
    {
        $this->call('1')->shouldBe('1');
    }

    function it_return_string_2_for_2()
    {
        $this->call('2')->shouldBe('2');
    }

    function it_return_string_3_for_aho()
    {
        $this->call('3')->shouldBe('aho');
    }

    function it_return_string_4_for_4()
    {
        $this->call('4')->shouldBe('4');
    }

    function it_return_string_6_for_aho()
    {
        $this->call('6')->shouldBe('aho');
    }

    function it_return_string_10_for_10()
    {
        $this->call('10')->shouldBe('10');
    }

    function it_return_string_13_for_aho()
    {
        $this->call('13')->shouldBe('aho');
    }

    function it_throws_an_exception_when_arguments_are_invalid()
    {
        $this->shouldThrow('\Exception')->duringCall(null);
    }
}
