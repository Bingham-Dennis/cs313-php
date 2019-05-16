<?php
  session_name("PuppyFactory");
  session_start();
  $json = '';

  $check = isset($_SESSION['cart']);

  if ($check === true) {
    $json = json_encode($_SESSION);
    echo $json;
  } else {
    echo "You have no items in your cart.";
  }

?>
