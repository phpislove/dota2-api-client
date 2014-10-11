<?php namespace Spec\Dota;

use PhpSpec\ObjectBehavior;
use Dota\Skill;

class SkillSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Dota\Skill');
    }

    function it_determines_the_skill_level()
    {
        $this->getSkillLevel(Skill::VERY_HIGH)->shouldReturn('Very High');
    }

}
