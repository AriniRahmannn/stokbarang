<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- My style -->
  <link rel="stylesheet" href="css/styless.css">

  <?php
  if(empty($_SESSION['username'])) {
    print "<link rel='stylesheet' href='css/style1.css'>";
  }?>

<?php
  if($_GET['menu'] == 'home') {?>
  <script src="script.js" defer></script>
    <link rel="stylesheet" type="text/css" href="css/foto.css">
    <?php } ?>


  <title>Administratorrr</title>