<?php

  if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['image']) && isset($_POST['description'])) {
    $dog = array($_POST['id'], $_POST['name'], $_POST['image'], $_POST['description']);
    var_dump($dog);
  } else {
    echo "broken";
  }

  session_start();
  var_dump($_SESSION);
  $_SESSION['cart'] = array();
  var_dump($_SESSION['cart']);
  push_array($_SESSION['cart'], $dog);
  var_dump($_SESSION['cart']);
  var_dump($_SESSION['cart']);
?>
