<html>
  <body>
  <?php
      $name = $_POST["name"];
      $email = $_POST["email"];
      $major = $_POST["major"];
      $comment = $_POST["comment"];
      $countryMessage = "<p>You have been to ";
      $countries = $_POST['countryList'];
      $countryMap = new \Ds\Map([
              'na' => 'North America',
              'sa' => 'South America',
              'eu' => 'Europe',
              'as' => 'Asia',
              'aa' => 'Austrailia',
              'af' => 'Africa',
              'at' => 'Antartica'
              ]);
      print "<h1>Welcome $name</h1><br>";
      print "<h3>your email is $email</h3><br>";
      print "<h5>you are a $major major</h5><br>";
      print "<h5>$comment</h5><br>";
      foreach($countries as $country) {
        if ($country === end($countries )) {
          $countryMessage = $countryMessage . "and " .  $countryMap[$country];
        } else {
          $countryMessage = $countryMessage . $countryMap[$country] . ", ";
        }
      }
      print $countryMessage;
  ?>
  </body>
</html>
