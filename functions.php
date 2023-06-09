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

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path('views\\' . $path);
}

function partial($path)
{
    return base_path('views\\partials\\' . $path);
}
