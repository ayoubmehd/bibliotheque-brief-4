<?php require_once "includes/header.php" ?>
<?php
  require_file("includes/nav.php");
  $result=$connectdb->query('SELECT * FROM auteur');
  $result->execute();

  $authors = $result->fetchAll();
?>

    <main class="authors">
      <div class="separation">
          <h1>Authors</h1>
      </div>


      <form class="form" action="<?php p_base_url("/auteur/insert.php?redirect=" . BASE_URL . $_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-fild">
          <label for="full_name">Full name</label>
          <input type="text" placeholder="Full name" id="full_name" name="name" />
        </div>
      <form class="form">
        <div class="form-fild">
          <label for="full_name">Image</label>
            <div class="file">
                <div class="placeholder">
                    Chose File...
                </div>
                <input type="file" placeholder="Full name" id="photo" name="photo" />
            </div>
        </div>
        <div class="form-fild">
          <label for="birthday">Birthday</label>
          <input type="date" placeholder="Birthday" id="birthday" name="date_de_naissance" />
        </div>
        <button class="cta" name="submit">Add Author</button>
      </form>

      <div class="table">
        <table>
          <thead>
            <tr>
                <th>Image</th>
                <th>Id</th>
                <th>Full Name</th>
                <th>Birthday</th>
                <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($authors as $author) : ?>
              <?php
                extract($author);
              ?>
            <tr>
                <td><?php echo "<img src='image/".$photo."'>";?></td>
                <td><?php echo $id;?></td>
                <td><?php echo $name;?></td>
                <td><?php echo $DDN;?></td>
                <td>
                  <a class="cta" href="auteur/delete.php?did=<?php echo $id; ?>&redirect=<?php p_base_url($_SERVER["PHP_SELF"]) ?>">Delete</a>
                  <a class="cta" href="auteur/edit.php?eid=<?php echo $id; ?>">Edit</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  </body>
</html>
