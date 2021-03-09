<?php
    include 'connectdb.php';
    $did=$_GET['did'];
    $result=$connectdb->prepare("DELETE FROM auteur WHERE id=$did");
    $result->execute();
    header("location: index.php");
?>