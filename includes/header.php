<?php
    require_once __DIR__ . "\\..\\config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php p_base_url("/css/main.css") ?>" />
    <script defer src="<?php p_base_url("/js/navbar.js") ?>"></script>
    <?php if (isset($importJsHead)): ?>
    <?php foreach ($importJsHead as $file): ?>
      <script defer src="<?php p_base_url("/js/$file") ?>"></script>
    <?php endforeach; ?>
    <?php endif; ?>
    <title>Home</title>
  </head>
  <body>
