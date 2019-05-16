<?php

  if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['image']) && isset($_POST['description'])) {
    $dog = array($_POST['id'], $_POST['name'], $_POST['image'], $_POST['description']);
    var_dump($dog);
  } else {
    echo "broken";
  }

  session_name("PuppyFactory");
  session_start();
  if (isset($_SESSION['cart'])  {
    array_push($_SESSION['cart'], $dog);
    foreach ($_SESSION['cart'] as $dog) {
      echo $dog[0];
      echo $dog[1];
      echo $dog[2];
      echo $dog[3];
    }
  } else {
    $_SESSION['cart'] = array();
    array_push($_SESSION['cart'], $dog);
    foreach ($_SESSION['cart'] as $dog) {
       echo $dog[0];
      echo $dog[1];
      echo $dog[2];
      echo $dog[3];
    }
 }
?>
