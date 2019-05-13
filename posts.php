<?php
  $conn = mysqli_connect('localhost', 'root', '123456', 'phpblog');
  $query = 'SELECT * FROM messages ORDER BY id DESC';
  $result = mysqli_query($conn, $query);
  $messages = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  mysqli_close($conn);
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
  <center>
    <?php foreach($messages as $message):?>
      <h1><?php echo $message['message']; ?></h1>
      <h5><?php echo $message['username']; ?></h5>
    <?php endforeach;?>
  </center>
</body>
</html>