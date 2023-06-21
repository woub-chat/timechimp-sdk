<?php

require_once __DIR__ . './../vendor/autoload.php';

$request = new \Guapa\TimeChimp\ProjectsRequest();
$request->setAccessToken('token');

/** @var \GuzzleHttp\Psr7\Response $response */
$response = $request->getAll();

$projects = json_decode($response->getBody(), true);

var_dump($projects);