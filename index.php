<?php

header("Content-type: application/json; charset=utf-8");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

var_dump($uri);
var_dump($uri[2]);
var_dump($uri[3]);

if ((isset($uri[2]) && $uri[2] != 'user') || !isset($uri[2])) {
    header("HTTP/1.1 404 Not Found");
    exit();
}


?>