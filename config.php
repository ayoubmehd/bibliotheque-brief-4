<?php

    define('ROOT', __DIR__);
    // Change this to your folder name.
    define('SUFIX', '');
    define("BASE_URL", $_SERVER["REQUEST_SCHEME"] . "://". $_SERVER["SERVER_NAME"] . SUFIX);

    require_once ROOT . "\\helpers\\functions.php";

    $db = require_file("helpers\\connectdb.php");

    extract($db);