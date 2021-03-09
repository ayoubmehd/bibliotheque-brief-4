<?php
include 'connectdb.php';
$eid= $_GET["eid"];
$result=$connectdb->prepare("SELECT * FROM livre WHERE id=$eid");
$result->execute();

$row=$result->fetch(PDO::FETCH_ASSOC);
        extract($row);
        ?>
        <form action="editprocess.php" method="post">
            <input type="hidden" value ="<?php echo $id;?>" name="id">
            <input type="name" value ="<?php echo $auteur;?>" name="auteur">
            <input type="name" value ="<?php echo $titre;?>" name="titre">            
            <input type="file" value="<?php echo "<img src='image/".$cover."'>";?>" name="cover">
            <input type="text" value ="<?php echo $prix;?>" name="prix">
            <input type="submit" name="update" value="apdate">
        </form>