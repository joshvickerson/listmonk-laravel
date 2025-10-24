<?php

namespace Theafolayan\ListmonkLaravel;

use Theafolayan\ListmonkLaravel\Http\Client;

class Listmonk
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getSubscribers($filters = [])
    {
        return $this->client->request('GET', '/api/subscribers', $filters);
    }

    public function createSubscriber($data)
    {
        return $this->client->request('POST', '/api/subscribers', $data);
    }

    public function getLists()
    {
        return $this->client->request('GET', '/api/lists');
    }
    
    /**
     * Makes a GET request to /lists/{id}
     *
     * @param integer $listId Numerical id of the list in Listmonk
     *
     * @return Request API response
     */
    public function getListById($list_id = 1)
    {
            return $this->client->request("GET", "/api/lists/{$list_id}");
    }

    public function createList($data)
    {
        return $this->client->request('POST', '/api/lists', $data);
    }
}
