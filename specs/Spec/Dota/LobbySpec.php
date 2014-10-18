<?php namespace Spec\Dota;

use PhpSpec\ObjectBehavior;

class LobbySpec extends ObjectBehavior {

    function let()
    {
        $this->beConstructedWith(0, 'Public matchmaking');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\Lobby');
    }

    function it_returns_the_lobby_id()
    {
        $this->getId()->shouldReturn(0);
    }

    function it_returns_the_lobby_name()
    {
        $this->getName()->shouldReturn('Public matchmaking');
    }

}
