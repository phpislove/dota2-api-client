<?php namespace Spec\Dota;

use PhpSpec\ObjectBehavior;

class MatchSpec extends ObjectBehavior {

    const MATCH_ID = 42;

    function let()
    {
        $this->beConstructedWith(static::MATCH_ID);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\Match');
    }

    function it_returns_the_match_id()
    {
        $this->getId()->shouldReturn(static::MATCH_ID);
    }

}
