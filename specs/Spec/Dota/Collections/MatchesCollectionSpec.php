<?php namespace Spec\Dota\Collections;

use PhpSpec\ObjectBehavior;

class MatchesCollectionSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\Collections\MatchesCollection');
    }

}
