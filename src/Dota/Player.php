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

    /**
     * @return integer
     */
    public function getKills()
    {
        return $this->data['kills'];
    }

    /**
     * @return integer
     */
    public function getDeaths()
    {
        return $this->data['deaths'];
    }

    /**
     * @return integer
     */
    public function getAssists()
    {
        return $this->data['assists'];
    }

    /**
     * @return boolean
     */
    public function hasAbandoned()
    {
        return $this->data['leaver_status'];
    }

    /**
     * @return integer
     */
    public function getGold()
    {
        return $this->data['gold_spent'] + $this->data['gold'];
    }

    /**
     * @return integer
     */
    public function getLastHits()
    {
        return $this->data['last_hits'];
    }

    /**
     * @return integer
     */
    public function getDenies()
    {
        return $this->data['denies'];
    }

    /**
     * @return integer
     */
    public function getGoldPerMin()
    {
        return $this->data['gold_per_min'];
    }

    /**
     * @return integer
     */
    public function getXpPerMin()
    {
        return $this->data['xp_per_min'];
    }

    /**
     * @return integer
     */
    public function getHeroDamage()
    {
        return $this->data['hero_damage'];
    }

    /**
     * @return integer
     */
    public function getTowerDamage()
    {
        return $this->data['tower_damage'];
    }

    /**
     * @return integer
     */
    public function getHeroHealing()
    {
        return $this->data['hero_healing'];
    }

    /**
     * @return integer
     */
    public function getLevel()
    {
        return $this->data['level'];
    }

}
