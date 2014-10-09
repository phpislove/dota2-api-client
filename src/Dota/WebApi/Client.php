<?php namespace Dota\WebApi;

use GuzzleHttp\Client as GuzzleClient;

class Client {

    /**
     * @var string
     */
    protected $key;

    /**
     * @var GuzzleClient
     */
    protected $client;

    /**
     * @var integer
     */
    const REQUEST_OK = 200;

    /**
     * @param string $key
     * @param GuzzleClient $client
     * @return Client
     */
    public function __construct($key, GuzzleClient $client)
    {
        $this->key = (string) $key;
        $this->client = $client;
    }

    /**
     * @param string $url
     * @param array $params
     * @return array
     */
    public function get($url, array $params = [])
    {
        $params['key'] = $this->key;

        $response = $this->client->get($url, ['query' => $params]);

        if ($response->getStatusCode() != static::REQUEST_OK)
        {
            throw new Exceptions\RequestFailed;
        }

        return $response->json();
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->key;
    }

}
