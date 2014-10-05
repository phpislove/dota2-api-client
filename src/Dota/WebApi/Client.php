<?php namespace Dota\WebApi;

class Client {

    /**
     * @var string
     */
    protected $key;

    /**
     * @param string $key
     * @return Client
     */
    public function __construct($key)
    {
        $this->key = (string) $key;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->key;
    }

}
