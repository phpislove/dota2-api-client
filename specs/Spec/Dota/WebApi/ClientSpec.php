<?php namespace Spec\Dota\WebApi;

use PhpSpec\ObjectBehavior;
use GuzzleHttp\Client, GuzzleHttp\Message\Response;

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

    function it_uses_the_underlying_class_properly(Client $client)
    {
        $client->get('url', ['query' => ['key' => static::API_KEY]])
               ->willReturn(new Response(404));

        $this->shouldThrow('Dota\WebApi\Exceptions\RequestFailed')
             ->duringGet('url');
    }

}
