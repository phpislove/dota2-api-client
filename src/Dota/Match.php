<?php namespace Dota;

use Dota\WebApi\Client;

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

}
