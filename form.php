<?php 
if(isset($_POST['submit'])) {
  $names = ['Edwin', 'Martin', 'Maria', 'Jane'];
  $minimum = 3;
  $maximum = 10;

  $useranme = $_POST['username'];
  $password = $_POST['password'];

  if(strlen($useranme) < $minimum) {
    echo 'Username has to be longer than 5';
  }
  if(strlen($useranme) > $maximum) {
    echo 'Username has to be shorter than 10';
  }
  if(!in_array($useranme, $names)) {
    echo 'Sorry you are not allowed';
  } else {
    echo 'Welcome!';
  }

  // echo $useranme;
  // echo $password;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="form.php" method="post">
<input type="text" name="username" placeholder="Enter Name">
<input type="password" name="password" placeholder="Enter Password">
<br>
<input type="submit" name="submit">

</form>


  
</body>
</html>