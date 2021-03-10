<?php 

function p_base_url($path = '') {
    echo BASE_URL . $path;
}


function upload()
{
if (!in_array($_FILES["image"]["type"], ["image/jpeg", "image/gif", "image/png"])) return;

// var_dump($_FILES["image"]);
}

function dump($value) {    
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function require_file($path) {

    $path = ROOT . "\\" . $path;

    if (file_exists($path)) {
        return require_once($path);
    }

}

function redirect($location = '/') {

    $location = isset($_GET["redirect"]) ? $_GET["redirect"] : "/";

    header("Location: "  . $location);
}