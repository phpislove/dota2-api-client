<?php namespace Dota;

class Match {

    /**
     * @var integer
     */
    protected $id;

    /**
     * @param integer $id
     * @return Match
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

}
