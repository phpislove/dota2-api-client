<?php namespace Spec\Dota;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Dota\WebApi\Client;

class MatchFinderSpec extends ObjectBehavior {

    public function let(Client $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\MatchFinder');
    }

    function it_returns_the_query_conditions()
    {
        $this->getQueryConditions()->shouldReturn([]);
    }

    function it_executes_the_query(Client $client)
    {
        $client->get(Argument::type('string'), [])->willReturn([
            'result' => [
                'matches' => [],
            ],
        ]);

        $this->find()->shouldHaveType('Dota\Collections\MatchesCollection');
    }

}
