<?php namespace Spec\Dota;

use PhpSpec\ObjectBehavior;

class PlayerSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\Player');
    }

}
