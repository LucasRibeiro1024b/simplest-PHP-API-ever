<?php

header("Content-type: application/json; charset=utf-8");

require_once "catBreeds.php";

$response;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

if ((isset($uri[1]) && $uri[1] != "cats") || !isset($uri[2])) {
    header("HTTP/1.1 404 Not Found");
    exit();
}

$response["breeds"] = $catBreeds;

echo json_encode($response);


?>