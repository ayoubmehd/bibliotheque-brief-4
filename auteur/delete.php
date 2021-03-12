<?php
    
    require_once __DIR__ . "\\..\\config.php";

    $did=$_GET['did'];
    $result=$connectdb->prepare("DELETE FROM auteur WHERE id=?");
    if($result->execute([$did])) {
        redirect();
    }
    dump($result->errorInfo());
    
?>