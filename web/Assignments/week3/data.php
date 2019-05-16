<?php
  session_name("PuppyFactory");
  session_start();

  isset($_SESSION['cart']);
  isset($_SESSION['fName']);

  var_dump($_SESSION);
?>
