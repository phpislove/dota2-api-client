<?php namespace Spec\Dota;

use PhpSpec\ObjectBehavior;

class ItemSpec extends ObjectBehavior {

    function let()
    {
        $this->beConstructedWith(1, 'blink');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\Item');
    }

    function it_returns_the_proper_item_id()
    {
        $this->getId()->shouldReturn(1);
    }

    function it_returns_the_proper_item_name()
    {
        $this->getName()->shouldReturn('blink');
    }

    function it_returns_the_proper_image_url()
    {
        $this->getImageUrl()->shouldReturn(
            'http://cdn.dota2.com/apps/dota2/images/items/blink_lg.png'
        );
    }

}
