<?php namespace Dota\Collections;

use Illuminate\Support\Collection;
use Dota\Match;

class MatchesCollection extends Collection {

    /**
     * @param array $matches
     * @return MatchesCollection
     */
    public function __construct(array $matches)
    {
        foreach ($matches as $key => $match)
        {
            $matches[$key] = new Match($match['match_id']);
        }

        parent::__construct($matches);
    }

}
