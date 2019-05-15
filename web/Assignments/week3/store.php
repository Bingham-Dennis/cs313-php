<?php
  echo "hello";
  $dog = array(json_decode($_POST['id']), json_decode($_POST['name']), json_decode($_POST['image']));
  var_dump($dog);
  // session.ls
  // start();
  // $_SESSION['cart'] = array();
  // push_array($_SESSION['cart'], $_POST['dog']);
  // var_dump($_SESSION['cart']);
?>
