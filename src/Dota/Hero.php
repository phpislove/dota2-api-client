<?php namespace Dota;

class Hero {

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $localizedName;

    /**
     * @param integer $id
     * @param string $name
     * @param string $localizedName
     * @return Hero
     */
    public function __construct($id, $name, $localizedName)
    {
        $this->id = $id;
        $this->name = $name;
        $this->localizedName = $localizedName;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLocalizedName()
    {
        return $this->localizedName;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return sprintf(
            'http://cdn.dota2.com/apps/dota2/images/heroes/%s_sb.png', $this->name
        );
    }

}
