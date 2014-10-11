<?php namespace Spec\Dota;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Dota\WebApi\Client;

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

    function it_returns_the_players(Client $client)
    {
        $client->get(Argument::type('string'), Argument::type('array'))
               ->willReturn(['result' => ['players' => []]]);

        $this->loadData($client);
        $this->getPlayers()->shouldHaveType('Dota\Collections\PlayersCollection');
    }

}
