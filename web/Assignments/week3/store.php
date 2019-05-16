<?php

  if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['image']) && isset($_POST['description'])) {
    $dog = array('id' => $_POST['id'], 'name' => $_POST['name'], 'image' => $_POST['image'], 'description' => $_POST['description']);
    var_dump($dog);
  } else {
    echo "Object was not set properly.";
  }

  session_name("PuppyFactory");
  session_start();
  $json = '';
  if (isset($_SESSION['cart']))  {
    array_push($_SESSION['cart'], $dog);
    foreach ($_SESSION['cart'] as $dog) {
      $json = json_encode($dog);
      echo $json;
    }
  } else {
    $_SESSION['cart'] = array();
    array_push($_SESSION['cart'], $dog);
    foreach ($_SESSION['cart'] as $dog) {
        $json = json_encode($dog);
        echo $json;
    }
 }
?>
