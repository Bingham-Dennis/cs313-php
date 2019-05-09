<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Team Assignment Week 3</title>
    <link rel="stylesheet" type="text/css" href="mystyles.css">
  </head>
  <body>
    <form action="./process.php" method="POST" class="signup">
      <div class="section">
          <h2>Contact Info:</h2>
          Name:
          <input id="name" type="text" name="name" placeholder="John Doe"><br>
          Email:
          <input id="email" type="text" name="email" placeholder="myemail@gmail.com"><br>
      </div>
      <div class="section">
          <h2>Major:</h2>
          <?php
            $type = "radio";
            $name = "major";
            $majors = array(
                      "Computer Science" => "CS",
                      "Web Design and Development" => "WDD",
                      "computer Information Technology" => "CIT",
                      "Computer Engineering" => "CE"
                    );
            foreach ($majors as $major => $abbr) {
              print "<input type=\"$type\" name=\"$name\" value=\"$abbr\"> $major<br>";
            }
          ?>
      </div>
      <div class="section">
          <h2>Countries Visited:</h2>
          <input type="checkbox" name="countryList[]" value="North America"> North America<br>
          <input type="checkbox" name="countryList[]" value="South America"> South America<br>
          <input type="checkbox" name="countryList[]" value="Europe"> Europe<br>
          <input type="checkbox" name="countryList[]" value="Asia"> Asia<br>
          <input type="checkbox" name="countryList[]" value="Australia"> Australia<br>
          <input type="checkbox" name="countryList[]" value="Africa"> Africa<br>
          <input type="checkbox" name="countryList[]" value="Antartica"> Antartica<br>
      </div>
      <div class="section">
          <h2>Comments:</h2><br>
          <textarea name="comment" id="comment"></textarea>
      </div>
      <div class="section" id="action">
        <input type="submit" value="Submit">
        <input type="reset">
      </div>
    </form>
  </body>
</html>
