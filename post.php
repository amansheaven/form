<?php 
  session_start();
  $conn = mysqli_connect('localhost', 'root', '123456', 'phpblog');
  $msg = $_POST['message'];
  $username = $_SESSION['username'];
  $query = "INSERT INTO messages(message, username) VALUES('$username', '$msg')";
  mysqli_query($conn, $query);

  mysqli_close($conn);
?>