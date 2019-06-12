<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./assets/stylesheet.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript" src="./src/movies.js"></script>
  <title>Movies Plus | Movie</title>
</head>
<body onload="getMovie()">
  <div id="topNav">
    <h1 id="logo"><a href="./dashboard.php">Movies Plus</a></h1>
    <ul>
      <li><a href="./dashboard.php"><i class="material-icons">home</i></a></li>
      <li><a href="#" ><i class="material-icons">settings</i></a></li>
      <li><a href="#" ><i class="material-icons">notifications</i></a></li>
      <li><a href="#" ><i class="material-icons">person</i></a></li>
    </ul>
</div>
<div id="content">
    <div id="sideNav">
      <ul>
        <li><a href="./movies.php" ><i class="material-icons">local_movies</i> Movies</a></li>
        <li><a href="#" ><i class="material-icons">tv</i> TV Shows</a></li>
        <li><a href="#" ><i class="material-icons">library_music</i> Music</a></li>
        <li><a href="#" ><i class="material-icons">photo_library</i> Pictures</a></li>
        <li><a href="#" ><i class="material-icons">videocam</i> Home Videos</a></li>
        <li><a href="#" ><i class="material-icons">folder_open</i> Documents</a></li>
      </ul>
    </div>
    <div id="movieContainer">

    </div>
  </div>
</body>
</html>
