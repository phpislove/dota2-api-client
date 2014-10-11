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
     * @var Client
     */
    protected $client;

    /**
     * @var array
     */
    protected $conditions = [];

    /**
     * @param Client $client
     * @return MatchFinder
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     */
    public function getQueryConditions()
    {
        return $this->conditions;
    }

    /**
     * @return MatchesCollection
     */
    public function find()
    {
        $response = $this->client->get(static::URL, $this->conditions);

        return new MatchesCollection($response['result']['matches']);
    }

    /**
     * @param string $name
     * @return void
     */
    public function player($name)
    {
        $this->conditions['player_name'] = $name;
    }

    /**
     * @param integer $id
     * @return void
     */
    public function hero($id)
    {
        $this->conditions['hero_id'] = $id;
    }

    /**
     * @param integer $type
     * @return void
     */
    public function skill($type)
    {
        $this->conditions['skill'] = $type;
    }

    /**
     * @param integer $date
     * @return void
     */
    public function min($date)
    {
        $this->conditions['date_min'] = $date;
    }

    /**
     * @param integer $date
     * @return void
     */
    public function max($date)
    {
        $this->conditions['date_max'] = $date;
    }

    /**
     * @param integer $id
     * @return void
     */
    public function account($id)
    {
        $this->conditions['account_id'] = $id;
    }

    /**
     * @param integer $matchId
     * @return void
     */
    public function startAt($matchId)
    {
        $this->conditions['start_at_match_id'] = $matchId;
    }

    /**
     * @param integer $number
     * @return void
     */
    public function amount($number)
    {
        $this->conditions['matches_requested'] = $number;
    }

}
