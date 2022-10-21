<?php

$client = new MongoDB\Driver\Client("mongodb://localhost:27017");
$db = $client->test;
?>