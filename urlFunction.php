<?php

function urlIs($value)
{

    $url = parse_url($_SERVER["REQUEST_URI"]);
    $url_last = $url["path"];
    return $url_last === $value;
}
