<?php namespace Dota;

use Dota\WebApi\Client;
use Dota\Collections\PlayersCollection;

class Match {

    /**
     * @var string
     */
    const URL =
        'https://api.steampowered.com/IDOTA2Match_570/GetMatchDetails/V001';

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @param integer $id
     * @return Match
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @param Client $client
     * @return void
     */
    public function loadData(Client $client)
    {
        if ( ! count($this->data))
        {
            $this->data = $client->get(static::URL, ['match_id' => $this->id]);
        }
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return PlayersCollection
     */
    public function getPlayers()
    {
        return new PlayersCollection($this->data['result']['players']);
    }

    /**
     * @return string
     */
    public function getWinner()
    {
        return $this->data['result']['radiant_win'] ? 'radiant' : 'dire';
    }

    /**
     * @return integer
     */
    public function getDuration()
    {
        return $this->data['result']['duration'];
    }

    /**
     * @return integer
     */
    public function getStartTime()
    {
        return $this->data['result']['start_time'];
    }

    /**
     * @return integer
     */
    public function getLobbyType()
    {
        return $this->data['result']['lobby_type'];
    }

    /**
     * @return integer
     */
    public function getGameMode()
    {
        return $this->data['result']['game_mode'];
    }

    /**
     * @return integer
     */
    public function getRegion()
    {
        return $this->data['result']['cluster'];
    }

}
