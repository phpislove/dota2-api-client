<?php namespace Spec\Dota;

use PhpSpec\ObjectBehavior;

class HeroSpec extends ObjectBehavior {

    function let()
    {
        $this->beConstructedWith(1, 'antimage', 'Anti-Mage');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\Hero');
    }

    function it_returns_the_proper_hero_id()
    {
        $this->getId()->shouldReturn(1);
    }

    function it_returns_the_proper_hero_name()
    {
        $this->getName()->shouldReturn('antimage');
    }

    function it_returns_the_proper_localized_hero_name()
    {
        $this->getLocalizedName()->shouldReturn('Anti-Mage');
    }

    function it_returns_the_proper_image_url()
    {
        $this->getImageUrl()->shouldReturn(
            'http://cdn.dota2.com/apps/dota2/images/heroes/antimage_sb.png'
        );
    }

}
