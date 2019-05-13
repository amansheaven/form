<?php
  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    if(!empty($username)) {
      session_start();
      $_SESSION['username'] = $username;
      header('Location: ../index.php');
    } else {
      echo 'You username should not be empty, Faggot';
    }
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
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" > 
  <input type="text" id="txt txt-username" name="username">
  <input type="submit" id="btn" name="submit">
</body>
</html>