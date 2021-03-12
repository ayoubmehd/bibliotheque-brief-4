<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>books</title>
</head>
<body>

    <form action="insert.php" method="post">
        <input type="name" name="auteur">
        <input type="name" name="titre">
        <input type="file" name="cover">
        <input type="text"  name="prix">
        <input type="submit" name="submit" value="submit">
    </form>
 
    <?php

    include 'insert.php'; 

    $result=$connectdb->query('SELECT * FROM livre');
    $result->execute();
    ?>

    <table>
        <th>
            <td>ID</td>
            <td>auteur</td>
            <td>titre</td>
            <td>cover</td>
            <td>prix</td>
            <td>delete</td>
            <td>edit</td>
        </th>
    </table>

    <?php

    try{

        while($row=$result->fetch(PDO::FETCH_ASSOC))
            {
                extract($row);
                ?>
                <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $auteur;?></td>
                    <td><?php echo $titre;?></td>
                    <td><?php echo $prix;?></td>
                    <td><?php echo "<img src='image/".$cover."'>";?></td>
                    <td><a href="delete.php?did=<?php echo $id;  ?>"> Delete</a></td>
                    <td><a href="edit.php?eid=<?php echo $id;  ?>"> Edit</a></td><br>
                </tr>
                <?php
            }
        }

        
    catch (PDOExeption $e) {
        echo 'failed' . $e -> getMessage();
    }
    ?>    
</body>
</html>
