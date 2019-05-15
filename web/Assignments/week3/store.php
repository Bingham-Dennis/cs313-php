<?php
  if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['image']) && isset($_POST['description'])) {
    $dog = array($_POST['id'], $_POST['name'], $_POST['image'], $_POST['description']);
    var_dump($dog);
  } else {
    echo "broken";
  }
  // session.start();
  // $_SESSION['cart'] = array();
  // push_array($_SESSION['cart'], $_POST['dog']);
  // var_dump($_SESSION['cart']);
?>
