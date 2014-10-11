<?php namespace Dota;

class Player {

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @param array $data
     * @return Player
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

}
