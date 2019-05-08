<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Dennis Bingham's Homepage</title>
    <link rel="shortcut icon" type="image/png" href="./favicon.png">
    <link rel="stylesheet" type="text/css" href="./mystyles.css">
    <script src="./myjs.js"></script>
  </head>
  <body onload="loadTime()">
    <div id="welcome" onload="addListItems()">
        <h1>Welcome to my Homepage</h1>
        <div id="time"></div>
    </div>
    <div id="container">
    <div class="innerContainer">
      <img src="./me.jpg" alt="Dennis Bingham">
    </div>
      <div class="innerContainer">
         <div class="item">
            <h3>Assignments</h3>
            <ul id="list1">
            </ul>
         </div>
          <div class="item">
            <h3>Team Assignments</h3>
            <ul id="list2">

            </ul>
          </div>
      </div>
    </div>
  </body>
</html>
