<?php namespace Dota;

use Dota\WebApi\Client;
use Dota\Collections\MatchesCollection;

class MatchFinder {

    /**
     * @var string
     */
    const URL =
        'https://api.steampowered.com/IDOTA2Match_570/GetMatchHistory/V001';

    /**
     * @var array
     */
    protected $conditions = [];

    /**
     * @return array
     */
    public function getQueryConditions()
    {
        return $this->conditions;
    }

    /**
     * @param Client $client
     * @return MatchesCollection
     */
    public function find(Client $client)
    {
        $response = $client->get(static::URL, $this->conditions);

        return new MatchesCollection($response['result']['matches']);
    }

    /**
     * @param string $name
     * @return MatchFinder
     */
    public function player($name)
    {
        $this->conditions['player_name'] = $name;

        return $this;
    }

    /**
     * @param integer $id
     * @return MatchFinder
     */
    public function hero($id)
    {
        $this->conditions['hero_id'] = $id;

        return $this;
    }

    /**
     * @param integer $type
     * @return MatchFinder
     */
    public function skill($type)
    {
        $this->conditions['skill'] = $type;

        return $this;
    }

    /**
     * @param integer $date
     * @return MatchFinder
     */
    public function min($date)
    {
        $this->conditions['date_min'] = $date;

        return $this;
    }

    /**
     * @param integer $date
     * @return MatchFinder
     */
    public function max($date)
    {
        $this->conditions['date_max'] = $date;

        return $this;
    }

    /**
     * @param integer $id
     * @return MatchFinder
     */
    public function account($id)
    {
        $this->conditions['account_id'] = $id;

        return $this;
    }

    /**
     * @param integer $matchId
     * @return MatchFinder
     */
    public function startAt($matchId)
    {
        $this->conditions['start_at_match_id'] = $matchId;

        return $this;
    }

    /**
     * @param integer $number
     * @return MatchFinder
     */
    public function amount($number)
    {
        $this->conditions['matches_requested'] = $number;

        return $this;
    }

}
