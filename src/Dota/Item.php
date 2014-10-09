<?php namespace Dota;

class Item {

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @param integer $id
     * $param string $name
     * @return Item
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
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
    public function getImageUrl()
    {
        return sprintf(
            'http://cdn.dota2.com/apps/dota2/images/items/%s_lg.png', $this->name
        );
    }

}
