<?php
  session_name("PuppyFactory");
  session_start();
  var_dump($_SESSION);
  var_dump($_SESSION['cart']);
  $json = '';

  $check = isset($_SESSION['cart']);

  if ($check === true) {
    $json = json_encode($_SESSION['cart']);
    echo $json;
  } else {
    echo "You have no items in your cart.";
  }

?>
