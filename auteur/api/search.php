<?php
    require_once __DIR__ . "/../../config.php";

    if (isset($_GET["q"])) {
        $query = $_GET["q"];
        $result=$connectdb->query("SELECT id, name FROM auteur WHERE name LIKE '%$query%'");
        $auteur=$result->fetchAll(PDO::FETCH_ASSOC);
    
        echo json_encode($auteur);
        exit();
    }
    echo json_encode([]);