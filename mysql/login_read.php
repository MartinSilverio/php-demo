<?php

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if ($connection) {
        echo "we are connected";
    } else {
        die("Database connection failed");
    }

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query failed');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="col-sm-6">
            <?php 
                while($row = mysqli_fetch_assoc($result)) {
            ?>

            <pre>
                <?php 
                    print_r($row);
                ?>
            </pre>

            <?php 
                }     
            ?>
           
        </div>
    </div>

</body>

</html>
