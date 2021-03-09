<?php
    include "index.php";
    $id=$_POST['id'];
    $name=$_POST['name'];
    $DDN=$_POST['date_de_naissance'];
    $photo=$_POST['photo'];

    $result=$connectdb->prepare("UPDATE `auteur` SET  `name` = '$name', `DDN` = '$DDN', `photo` = '$photo' WHERE `id` = '$id';"); 
    $result->execute();
    header("location: index.php");
?>