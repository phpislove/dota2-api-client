<?php namespace Dota;

class Skill {

    /**
     * @var integer
     */
    const ANY = 0;

    /**
     * @var integer
     */
    const NORMAL = 1;

    /**
     * @var integer
     */
    const HIGH = 2;

    /**
     * @var integer
     */
    const VERY_HIGH = 3;

    /**
     * @param integer $id
     * @return string
     */
    public function getSkillLevel($id)
    {
        switch ($id)
        {
            case static::NORMAL: return 'Normal';
            case static::HIGH: return 'High';
            case static::VERY_HIGH: return 'Very High';
            default: return null;
        }
    }

}
