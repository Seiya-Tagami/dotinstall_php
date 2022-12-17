<?php

require_once(__DIR__ . '/config.php');

//package
// - Composer
use Abraham\TwitterOAuth\TwitterOAuth;

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
$connection->setApiVersion("2");
// $content = $connection->get("account/verify_credentials");
// $content = $connection->get("statuses/home_timeline");
$response = $connection->post('tweets', ['text' => '本日のテスト'], true);
var_dump($response);

// 結論：何かとめんどくさい

