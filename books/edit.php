<?php
    require_once __DIR__ . "/../includes/header.php";

    require_file("/includes/nav.php");
    $eid= $_GET["eid"];
    $result=$connectdb->prepare("SELECT * FROM livre WHERE id=$eid");
    $result->execute();

    $row = $result->fetch(PDO::FETCH_ASSOC);
    extract($row);
?>

    <section class="edit">
        
    <form class="form" action="editprocess.php?redirect=<?php p_base_url("/books.php") ?>" method="post">
        <input type="hidden" value ="<?php echo $id;?>" name="id">
        <div class="form-fild">
            <label for="">Titre</label>
            <input type="name" value ="<?php echo $titre;?>" name="titre">            
        </div>
        <div class="form-fild">
                <label for="full_name">Image</label>
                    <div class="file">
                        <div class="placeholder">
                            Chose File...
                        </div>
                        
                        <input type="file" value="<?php echo "<img src='image/".$cover."'>";?>" name="cover">
                    </div>
        </div>
        <div class="form-fild">
            <label for="">Prix</label>
            <input type="text" value ="<?php echo $prix;?>" name="prix">
        </div>
        <input class="cta" type="submit" name="update" value="update">
    </form>

    </section>

<?php require_file("/includes/footer.php") ?>