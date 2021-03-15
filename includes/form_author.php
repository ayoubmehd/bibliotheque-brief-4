
      <form class="form" action="<?php p_base_url("/auteur/insert.php?redirect=" . BASE_URL . $_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-fild ">
          <label for="full_name">Image</label>
            <div class="file">
                <div class="placeholder">
                    Chose File...
                </div>
                <input type="file" placeholder="Full name" id="photo" name="photo" />
            </div>
        </div>
        <div class="right">
          <div class="form-fild">
            <label for="full_name">Full name</label>
            <input type="text" placeholder="Full name" id="full_name" name="name" />
          </div>
          <div class="form-fild">
            <label for="birthday">Birthday</label>
            <input type="date" placeholder="Birthday" id="birthday" name="date_de_naissance" />
          </div>
          <button class="cta" name="submit">Add Author</button>
        </div>
      </form>

