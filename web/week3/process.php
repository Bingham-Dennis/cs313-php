<html>
  <body>
  <?php
      $countryMessage = "<p>You have been to ";
      $countries = $_POST['countryList[]'];
      echo "<h1>Welcome $_POST["name"]</h1><br>"
      echo "<h3>your email is $_POST["email"]</h3><br>"
      echo "<h5>you are a $_POST["major"]</h5><br>"
      foreach($countries as $country) {
        if ($country === end($countries )) {
          $countryMessage = $countryMessage . $country;
        } else {
          $countryMessage = $countryMessage . $country . ", ";
        }
      }
      echo $countries;
  ?>
  </body>
</html>
