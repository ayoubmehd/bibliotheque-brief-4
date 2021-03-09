<?php
    include "index.php";
    $id=$_POST['id'];
    $auteur=$_POST['auteur'];
    $titre=$_POST['titre'];
    $cover=$_POST['cover'];
    $prix=$_POST['prix'];

    $result=$connectdb->prepare("UPDATE `livre` SET  `auteur` = '$auteur', `titre` = '$titre', `cover` = '$cover' , `prix` = '$prix' WHERE `id` = '$id';"); 
    $result->execute();
    header("location: index.php");
?>