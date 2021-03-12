
<?php
    require_once __DIR__ . "/../config.php";

    if(isset($_POST['submit']))
    {
        // $auteur=$_POST['auteur'];
        // $titre=$_POST['titre'];
        // $cover=$_POST['cover'];
        // $prix=$_POST['prix'];

        // $result=$connectdb->prepare("INSERT into livre(cover, titre, prix) values(?, ?, ?)");
        // $result->execute([$cover, $titre, $prix]);        

        upload("/img-books/gallery/", "cover");

        // redirect();
    }
