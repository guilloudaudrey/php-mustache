<?php
require 'vendor/autoload.php';
$client = new \GuzzleHttp\Client();

$request = new \GuzzleHttp\Psr7\Request('GET', 'https://dog.ceo/api/breeds/list/all');
$promise = $client->sendAsync($request)->then(function ($response) {
    echo 'I completed! ' . $response->getBody();

    //Json parsing
$obj = json_decode($response->getBody());
var_dump($obj->message->wolfhound);

});
$promise->wait();

