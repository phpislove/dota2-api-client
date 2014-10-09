<?php namespace Spec\Dota\WebApi;

use PhpSpec\ObjectBehavior;
use GuzzleHttp\Client;

class ClientSpec extends ObjectBehavior {

    const API_KEY = 'api-key';

    function let(Client $client)
    {
        $this->beConstructedWith(static::API_KEY, $client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\WebApi\Client');
    }

    function it_returns_the_api_key()
    {
        $this->getApiKey()->shouldReturn(static::API_KEY);
    }

}
