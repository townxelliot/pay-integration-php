<?php

require_once('./vendor/autoload.php');

$client = new \Alphagov\Pay\Client([
    'apiKey' => '{payment API key}',
    'httpClient' => new \Http\Adapter\Guzzle6\Client()
]);
