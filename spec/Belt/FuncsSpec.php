<?php namespace spec\Belt;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FuncsSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Belt\Funcs');
    }

    function it_can_cache_the_returned_value()
    {
        $closure = function()
        {
            return \uniqid();
        };

        $this->cache($closure)->shouldBeEqualTo($this->cache($closure));
    }

    function it_can_wrap_a_closure_inside_another_closure()
    {
        $closure = function()
        {
            return 'foo';
        };

        $wrapper = function($closure)
        {
            return $closure().'bar';
        };

        $this->wrap($closure, $wrapper)->shouldReturn('foobar');
    }

}
