<?php namespace Spec\Dota;

use PhpSpec\ObjectBehavior;
// use Prophecy\Argument;

class MatchFinderSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\MatchFinder');
    }

}
