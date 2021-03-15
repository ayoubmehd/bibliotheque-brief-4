<?php
    require_once __DIR__ . "/../../config.php";

    if (isset($_GET["bid"])) {
        $result=$connectdb->prepare("SELECT id, name FROM auteur WHERE id IN (SELECT id_auteur FROM auteur_livre WHERE id_livre = ?)");
        $result->execute([$_GET["bid"]]);
        $auteur=$result->fetchAll(PDO::FETCH_ASSOC);
    
        echo json_encode($auteur);
    }