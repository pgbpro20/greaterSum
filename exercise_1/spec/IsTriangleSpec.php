<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IsTriangleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('IsTriangle');
    }

    function it_should_return_equilateral_for_1_1_1()
    {
        $this->evaluate(1,1,1)->shouldReturn('equilateral');
    }

    function it_should_return_isosceles_for_2_2_3()
    {
        $this->evaluate(2,2,3)->shouldReturn('isosceles');
    }

    function it_should_return_isosceles_for_2_3_2()
    {
        $this->evaluate(2,3,2)->shouldReturn('isosceles');
    }

    function it_should_return_isosceles_for_10_3_10()
    {
        $this->evaluate(10,3,10)->shouldReturn('isosceles');
    }

    function it_should_return_scalene_for_3_4_5()
    {
        $this->evaluate(3,4,5)->shouldReturn('scalene');
    }

    function it_should_throw_error_for_1_1_2()
    {
        $this->shouldThrow('\InvalidArgumentException')->during('evaluate', [1,1,2]);
    }

    function it_should_throw_error_for_2_5_2()
    {
        $this->shouldThrow('\InvalidArgumentException')->during('evaluate', [2,5,2]);
    }
}
