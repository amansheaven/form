<?php 
  $conn = mysqli_connect('localhost', 'root', '123456', 'phpblog');
  $msg = $_POST['message'];
  $query = "INSERT INTO messages(message, username) VALUES('REDIS', '$msg')";
  mysqli_query($conn, $query);

  mysqli_close($conn);
?>