<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auteurs</title>
</head>
<body>

    <form action="insert.php" method="post">
        <input type="name" name="name">
        <input type="date" name="date_de_naissance">
        <input type="file" name="photo">
        <input type="submit" name="submit" value="submit">
    </form>

    <?php

    include 'insert.php'; 

    $result=$connectdb->query('SELECT * FROM auteur');
    $result->execute();
    ?>

    <table>
        <th>
            <td>ID</td>
            <td>name</td>
            <td>date de naissance</td>
            <td>photo</td>
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
                <td><?php echo $name;?></td>
                <td><?php echo $DDN;?></td>
                <td><?php echo "<img src='image/".$photo."'>";?></td>
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
