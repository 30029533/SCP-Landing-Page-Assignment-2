<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="images/scp_logo2.jpg">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>SCP Landing Page</title>
    
    <style>
        .button {
        padding: 15px 25px;
        font-size: 24px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
        }

        .button:hover {background-color: #3e8e41}

        .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
        }
    </style>
  </head>
  <body>

<?php
    // Database Credentials
    $user = "a3002953_a30029533";
    $password = "Toiohomai1234";
    $dbname = "a3002953_scp";

    // Create connection object
    $connection = new mysqli('localhost',$user,$password,$dbname) or die(mysqli_error($connection));

    // Fetch data from db
    $result = $connection->query("select * from subject") or die($connection->error);


?>
</body>
</html>