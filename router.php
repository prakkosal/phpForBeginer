<?php

$url = parse_url($_SERVER["REQUEST_URI"]);
$url_last = $url["path"];
$routes = [
    "/" => "controller/index.php",
    "/home" => "controller/index.php",
    "/about" => "controller/about.php",
    "/contact" => "controller/contact.php"
];

function abort()
{
    http_response_code(403);
    require("views/403.php");
    die();
}

if (array_key_exists($url_last, $routes)) {
    require($routes[$url_last]);
} else {
    abort();
}
