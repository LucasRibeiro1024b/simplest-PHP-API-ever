<?php

header("Content-type: application/json; charset=utf-8");

require_once "catBreeds.php";

$response = [];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

if ((isset($uri[2]) && $uri[2] != "cats") || !isset($uri[2], $uri[3])) {
    header("HTTP/1.1 404 Not Found");
    exit();
}
else {
    switch ($uri[3]) {
        /**
         * /cats/list
         */
        case "list":
            $response["breeds"] = $catBreeds;
            break;
        
        /**
         * /cats/add
         */
        case "add":
            array_push($catBreeds, $_POST["catBreed"]);
            $response["catBreeds"] = $catBreeds;
            $response[] = array(
                "status" => 200,
                "message" => "Added new cat breed succesfully."
            );
            break;
    }
}

echo json_encode($response);


?>