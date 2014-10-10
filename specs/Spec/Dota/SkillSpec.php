<?php namespace Spec\Dota;

use PhpSpec\ObjectBehavior;

class SkillSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\Skill');
    }

}
