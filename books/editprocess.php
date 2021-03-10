<?php
    require_once __DIR__ . "/../config.php";

    $id=$_POST['id'];
    $titre=$_POST['titre'];
    $cover=$_POST['cover'];
    $prix=$_POST['prix'];

    $result=$connectdb->prepare("UPDATE `livre` SET  `titre` = '$titre', `cover` = '$cover' , `prix` = '$prix' WHERE `id` = '$id';"); 
    $result->execute();

    redirect();

?>