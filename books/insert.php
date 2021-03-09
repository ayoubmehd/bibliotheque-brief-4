
<?php
    include 'connectdb.php';    

    if(isset($_POST['submit']))
    {
        $auteur=$_POST['auteur'];
        $titre=$_POST['titre'];
        $cover=$_POST['cover'];
        $prix=$_POST['prix'];

        $result=$connectdb->query("INSERT into livre( auteur, cover, titre, prix) values('$auteur','$titre','$cover','$prix')");
        
        header("location: index.php");
    }
