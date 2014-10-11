<?php namespace Spec\Dota\Collections;

use PhpSpec\ObjectBehavior;

class PlayersCollectionSpec extends ObjectBehavior {

    function let()
    {
        $this->beConstructedWith([[], []]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\Collections\PlayersCollection');
    }

}
