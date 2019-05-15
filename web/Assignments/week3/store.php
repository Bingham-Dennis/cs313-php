<?php
  echo "hello";
  if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['image'])) {
    $dog = array(json_decode($_POST['id']), json_decode($_POST['name']), json_decode($_POST['image']));
    var_dump($dog);
  } else {
    echo "broken";
  }
  // session.ls
  // start();
  // $_SESSION['cart'] = array();
  // push_array($_SESSION['cart'], $_POST['dog']);
  // var_dump($_SESSION['cart']);
?>
