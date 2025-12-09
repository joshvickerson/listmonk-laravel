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
    
    public function addSubscription($data)
    {
        return $this->client->request('PUT', '/api/subscribers/lists', $data);
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
    
    public function getListById($list_id = 1)
    {
        return $this->client->request("GET", "/api/lists/{$list_id}");
    }

    public function createList($data)
    {
        return $this->client->request('POST', '/api/lists', $data);
    }
    
    public function sendTransaction($data)
    {
        return $this->client->request('POST', '/api/tx', $data);
    }
    
    public function getTemplateById($template_id = 1)
    {
        return $this->client->request("GET", "/api/templates/{$template_id}");
    }
}
