<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SCP Landing Page</title>

    <style type="text/css">
        .my-css{
            background: url(images/img_tree.gif) right center no-repeat, url(images/img_flwr.gif) left bottom no-repeat, url(images/bg_repeat1.jpg) left top repeat;
        }

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

        #shadow{
            border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px 15px 15px black;
        }
    </style>
  </head>
  <body class="container">

  <?php include 'connection.php'; ?>

<div class="jumbotron text-center row" id="shadow">
    <div>
        <a href="../index.php"><img src="../images/scp_logo2.jpg" class="img-fluid rounded mx-auto d-block img-responsive img-responsive" height=140 width=140></img></a>
    </div>
    <div class="text-center">
        <h1 class="display-1"><b>SCP Landing Page</b></h1>
    </div>
</div>