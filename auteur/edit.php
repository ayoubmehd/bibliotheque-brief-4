<?php
include 'connectdb.php';
$eid= $_GET["eid"];
$result=$connectdb->prepare("SELECT * FROM auteur WHERE id=$eid");
$result->execute();

$row=$result->fetch(PDO::FETCH_ASSOC);
        extract($row);
        ?>
        <form action="editprocess.php" method="post">
            <input type="hidden" value ="<?php echo $id;?>" name="id">
            <input type="name" value ="<?php echo $name;?>" name="name">
            <input type="date" value ="<?php echo $DDN;?>" name="date_de_naissance">
            <input type="file" value="<?php echo "<img src='image/".$photo."'>";?>" name="photo">
            <input type="submit" name="update" value="apdate">
        </form>    
    



