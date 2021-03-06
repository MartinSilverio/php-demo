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
    $number = [10, 30, 49];
    print_r($number);
    echo  "<br>";

    $names = ['first_name' =>  'Edwin', 'last_name' => 'Diaz'];
    print_r($names);
    echo  "<br>";

    echo $names['first_name'] . ' ' . $names['last_name'];
  ?>
</body>
</html>