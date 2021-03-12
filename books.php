<?php require_once "includes/header.php"?>
<?php require_file("/includes/nav.php") ?>

    <main class="books">
      <div class="separation">
          <h1>Books</h1>
      </div>

      
      <?php
        
        $result=$connectdb->query('SELECT * FROM livre');
        $result->execute();
    
        $books = $result->fetchAll();
      
        $action = "/books/insert.php?redirect=" . BASE_URL . $_SERVER["PHP_SELF"];

        require_file("/includes/form_book.php", [
          "action" => $action,
          "connectdb" => $connectdb
        ]);

      ?>



      <div class="table">
        <table>
          <thead>
            <tr>
                <th>Cover</th>
                <th>Id</th>
                <th>Title</th>
                <th>Price</th>
                <th>Authors</th>
                <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($books as $book): ?>
            <?php extract($book) ?>
            <tr>
                <td>
                  <img src="" alt="<?php echo $titre ?>" />
                </td>
                <td><?php echo $id ?></td>
                <td><?php echo $titre ?></td>
                <td><?php echo $prix ?></td>
                <td><?php echo "auteur" ?></td>
                <td>
                  <a class="cta" href="<?php p_base_url("/books/delete.php?did=$id&redirect="  . BASE_URL . $_SERVER["PHP_SELF"]) ?>">Delete</a>
                  <a class="cta" href="<?php p_base_url("/books/edit.php?eid=$id") ?>">Edit</a>
                </td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </main>
<?php require_file("/includes/footer.php") ?>