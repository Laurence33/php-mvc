<?php


function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function urlIs($url)
{
    return $_SERVER['REQUEST_URI'] === $url;
}

function abort($code = Response::NOT_FOUND)
{
    http_response_code($code);
    require "views/{$code}.view.php";
    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}
