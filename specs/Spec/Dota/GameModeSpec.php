<?php namespace Spec\Dota;

use PhpSpec\ObjectBehavior;

class GameModeSpec extends ObjectBehavior {

    function let()
    {
        $this->beConstructedWith(1, 'All Pick');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\GameMode');
    }

    function it_returns_the_game_mode_id()
    {
        $this->getId()->shouldReturn(1);
    }

    function it_returns_the_game_mode_name()
    {
        $this->getName()->shouldReturn('All Pick');
    }

}
