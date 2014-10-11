<?php namespace Dota;

use Dota\Collections\ItemsCollection;

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

    /**
     * @return integer
     */
    public function getAccountId()
    {
        return $this->data['account_id'];
    }

    /**
     * @return integer
     */
    public function getHero()
    {
        return $this->data['hero_id'];
    }

    /**
     * @return ItemsCollection
     */
    public function getItems()
    {
        $items = [
            $this->data['item_0'],
            $this->data['item_1'],
            $this->data['item_2'],
            $this->data['item_3'],
            $this->data['item_4'],
            $this->data['item_5'],
        ];

        return new ItemsCollection($items);
    }

}
