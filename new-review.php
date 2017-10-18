<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RBG</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div id="header">
      <h1><a href="index.html">RBG</a></h1>
      <div class="header-list">
        <ul>
          <li><h3><a href="../index.html">EARTHROCK</a></h3></li>
          <li><h3><a href="reviews.php">RATE</a></h3></li>
          <!--<li><h3><a href="rbg-play.html">PLAY</a></h3></li>-->
        </ul>
      </div>
    </div>
    <div id="content">
      <h1>Rate the Game</h1>
      <form class="write-review" action="new-review.php" method="post">
        <input type="text" name="review-author-input" value="">
        <input type="text" name="review-name-input" placeholder="Write the name of your review.">
        <textarea name="review-content-input" rows="8" cols="80" placeholder="Write your review content."></textarea>
      </form>
      <?php
      $servername = "localhost";
      $username = "username";
      $password = "password";
      $dbname = "myDB";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO reviews (name, author, content)
      VALUES ($_POST['review-name-input'], $_POST['review-author-input'], $_POST['review-content-input'])";

      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
       ?>
    </div>
    <div id="footer">
      <ul>
        <li><h4><a href="../index.html">Earthrock</a></h4></li>
        <li><h4><a href="index.html">Home</a></h4></li>
        <li><h4><a href="reviews.php">Rate</a></h4></li>
        <!--<li><h4><a href="rbg-play.html">Play</a></h4></li>-->
      </ul>
    </div>
  </body>
</html>
