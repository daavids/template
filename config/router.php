<?php

function loadView()
{
    $path = '../src/views/pages/';
    $url = $_SERVER['REQUEST_URI'];

    if (strlen($url) === 1 && $url === '/') { 
        require $path . 'index.php';
        return;
    } 

    if (file_exists($path . $url . '.php')) {
        require $path . $url . '.php';
        return;
    }

    require $path . '404.php';
    return;
}

loadView();