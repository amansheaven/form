<?php
  session_start();
  if(!isset($_SESSION['username'])) {
    header('Location: ./login');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <!-- UPPER BODY -->
  <center>
    <input type="text" id="msg">
    <button id="button">Add</button>
  </center>
  <!-- BODY -->
  <div id="load_tweets"> </div>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="./js/post.js"></script>
  <script src="./js/fetch.js"></script>
</body>
</html>