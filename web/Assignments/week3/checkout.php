<?php
  session_name("PuppyFactory");
  session_start();

  $check = isset($_SESSION['cart']);

  if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email'])) {
    $_SESSION['fName'] = $_POST['firstName'];
    $_SESSION['lName'] = $_POST['lastName'];
    $_SESSION['email'] = $_POST['email'];
  }  else {
    echo "Customers information was left blank.";
  }

  if (isset($_POST['street']) && isset($_POST['aptNum']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['zip']) && isset($_POST['country']) && isset($_POST['phone'])) {
    $_SESSION['street'] = $_POST['street'];
    $_SESSION['aptNum'] = $_POST['aptNum'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['zip'] = $_POST['zip'];
    $_SESSION['country'] = $_POST['country'];
    $_SESSION['phone'] = $_POST['phone'];
  } else {
    echo "Customer Location information left blank.";
  }

  echo file_get_contents("./confirm.html");
?>
