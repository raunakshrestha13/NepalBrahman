<?php

  $server = "localhost";

  $username ="root";

  $password ="";

  $dbname ="nb";

  $conn = mysqli_connect($server,$username,$password,$dbname);

  if(!$conn)
  {
    echo("Connection Failed".mysqli_connect_error($conn));

    die();

  }

  $cookie_name="Nepalbhraman";

  $cookie_value="Welcome to Nepal";

  setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <link rel="stylesheet" href="nepal_yatra.css">
  <title>Visit nepal</title>
</head>
<body>
    <h1 class="title">Visit Nepal</h1>
  <div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger"><div></div></div>

    <div class="menu">
      <div>
        <div>
          <ul>
            <li><h2>Preferences</h2></li>
            <li><a href="nature.php">Nature</a></li>
            <li><a href="adventure.php">Adventure </a></li>
            <li><a href="culture.php">Culture</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <header class="header">
    <div class="container header-inner" id="nepalyatra">
        <div class="wrapper_nep">
            <div>
      <h1 class="h1-nepalyatra">Yatra</h1>
      <p>Let's get started with a short glimpse of Nepal  </p>



    </div>
      <div>
          <div>

<iframe width="500" height="250" frameborder="0" allowFullScreen="true" src="https://virtualrealitynepal.com/embed/phewa/1"></iframe>

            <iframe width="500" height="250" frameborder="0" allowFullScreen="true" src="https://virtualrealitynepal.com/embed/swayambhu/2"></iframe>
        </div>
    </div>
    </div>
    <div class="nav-bar">
      <div>
        <div>
          <ul class="list">
            <li><a class = "links" href="index.php">Home</a></li>
            <li><a class = "links" href="about.php">About</a></li>
            <li><a class = "links" href="bttd.php">Best things to do </a></li>
            <li><a class = "links" href="nepal_yatra.php">Nepal yatra</a></li>
            <li><a class = "links" href="index2.php">Our Guides</a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>
  </header>
</body>
</html>
