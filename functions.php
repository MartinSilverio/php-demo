<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php 

  function say_Something() {
    echo 'Hello student';
  }

  function calculate() {
    echo 345 + 345;
  }

  function init() {
    say_Something();
    echo '<br>';
    calculate();
  }

  init();

?>
  
</body>
</html>