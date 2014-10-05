<?php namespace Spec\Dota\WebApi;

use PhpSpec\ObjectBehavior;
// use Prophecy\Argument;

class ClientSpec extends ObjectBehavior {

    protected $key = 'api-key';

    function let()
    {
        $this->beConstructedWith($this->key);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\WebApi\Client');
    }

    function it_returns_the_api_key()
    {
        $this->getApiKey()->shouldReturn($this->key);
    }

}
