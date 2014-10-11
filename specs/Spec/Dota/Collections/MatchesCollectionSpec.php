<?php namespace Spec\Dota\Collections;

use PhpSpec\ObjectBehavior;

class MatchesCollectionSpec extends ObjectBehavior {

    function let()
    {
        $this->beConstructedWith([
            [
                'match_id' => 'whatever-it-might-be',
            ],
        ]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\Collections\MatchesCollection');
    }

}
