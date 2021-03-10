<?php
    require_once __DIR__ . "/../includes/header.php";

    $eid= $_GET["eid"];
    $result=$connectdb->prepare("SELECT * FROM auteur WHERE id=$eid");
    $result->execute();

    $row=$result->fetch(PDO::FETCH_ASSOC);
    extract($row);
?>

<?php require_file("/includes/nav.php") ?>
    <section class="edit">
        <form action="<?php p_base_url("/auteur/editprocess.php?redirect=" . BASE_URL . "/authors.php") ?>" method="post" class="form">
            <input type="hidden" value ="<?php echo $id;?>" name="id">
            <div class="form-fild">
                <label for="">Name</label>
                <input type="name" value ="<?php echo $name;?>" name="name">
            </div>
            <div class="form-fild">
                <label for="">Date de naissance</label>
                <input type="date" value ="<?php echo $DDN;?>" name="date_de_naissance">
            </div>

            <div class="form-fild">
                <label for="full_name">Image</label>
                    <div class="file">
                        <div class="placeholder">
                            Chose File...
                        </div>
                        <input type="file" value="<?php echo "<img src='image/".$photo."'>";?>" name="photo">
                    </div>
                </div>
            <button class="cta" type="submit" name="update">Update</button>
        </form>    
    </section>
    
<?php require_file("/includes/footer.php") ?>



