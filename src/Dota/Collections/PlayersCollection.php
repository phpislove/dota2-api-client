<?php namespace Dota\Collections;

use Illuminate\Support\Collection;
use Dota\Player;

class PlayersCollection extends Collection {

    /**
     * @param array $players
     * @return PlayersCollection
     */
    public function __construct(array $players)
    {
        foreach ($players as $key => $player)
        {
            $players[$key] = new Player($player);
        }

        parent::__construct($players);
    }

}
