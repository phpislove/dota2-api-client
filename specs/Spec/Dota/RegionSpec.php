<?php namespace Spec\Dota;

use PhpSpec\ObjectBehavior;

class RegionSpec extends ObjectBehavior {

    function let()
    {
        $this->beConstructedWith(111, 'US West');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\Region');
    }

    function it_returns_the_region_id()
    {
        $this->getId()->shouldReturn(111);
    }

    function it_returns_the_region_name()
    {
        $this->getName()->shouldReturn('US West');
    }

}
