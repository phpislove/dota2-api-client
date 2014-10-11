<?php namespace Spec\Dota\Collections;

use PhpSpec\ObjectBehavior;

class PlayersCollectionSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\Collections\PlayersCollection');
    }

}
