<?php
    require_once __DIR__ . "/../config.php";

    if(isset($_POST['submit']))
    {
        $auteur=$_POST['auteur'];
        $titre=$_POST['titre'];
        $prix=$_POST['prix'];

        $cover = upload("/img-books/gallery/", "cover");
        $result=$connectdb->prepare("INSERT into livre(cover, titre, prix) values(?, ?, ?)");
        $result->execute([$cover, $titre, $prix]);

        redirect();
    }