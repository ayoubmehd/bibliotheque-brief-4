<?php
    require_once __DIR__ . "/../../config.php";

    $result=$connectdb->query("SELECT id, name FROM auteur");

    $auteur=$result->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($auteur);