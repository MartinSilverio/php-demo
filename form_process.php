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