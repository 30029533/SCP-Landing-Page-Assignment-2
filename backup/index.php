<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="images/scp_logo2.jpg">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS background-color: #e1b382;
            background-size: cover;
            border: 10px double black; -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SCP Landing Page</title>
    
    <style type="text/css">
        .my-css{
            background: url(images/14fc5c2f47586ef4be1d6d066253f3a8.jpg) left top repeat;
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

        .button2 {
            display: inline-block;
            border-radius: 4px;
            background-color: #343a40;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button2 span2 {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button2 span2:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button2:hover span2 {
            padding-right: 25px;
        }

        .button2:hover span2:after {
            opacity: 1;
            right: 0;
        }

        #shadow{
            border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px 15px 15px black;
        }

        .flip-box {
            background-color: transparent;
            border: 1px solid #f1f1f1;
            perspective: 1000px; /* Remove this if you don't want the 3D effect */
        }

        /* This container is needed to position the front and back side */
        .flip-box-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        /* Do an horizontal flip when you move the mouse over the flip box container */
        .flip-box:hover .flip-box-inner {
            transform: rotateY(180deg);
        }

        /* Position the front and back side */
        .flip-box-front, .flip-box-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden; /* Safari */
            backface-visibility: hidden;
        }

        /* Style the front side (fallback if image is missing) */
        .flip-box-front {
            background-color: #bbb;
            color: black;
        }

        /* Style the back side */
        .flip-box-back {
            background-color: dodgerblue;
            color: white;
            transform: rotateY(180deg);
        }

        /* Mobile Responsive */
        .mresponsive{
            display: grid;
            grid-gap: 5px;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            grid-template-rows: repeat(2, 100px);
        }
    </style>

  </head>

  <body class="container my-css">
  <?php include 'connection.php'; ?>

    <div class="jumbotron text-center row" id="shadow">
        <div>
            <a href="index.php" class="navbar-brand"><img src="images/scp_logo2.jpg" class="img-fluid rounded mx-auto d-block img-responsive" height=140 width=140></img></a>
        </div>
        <div class="text-center">
            <h1 class="display-1"><b>SCP Landing Page</b></h1>
        </div>
    </div>
    
    <!-- menu row -->
    <div class="row" id="shadow">
        <div class="col nav-item active">
            <b><button class="btn btn-primary button bg-dark"><a href="forms/add.php" style="color: white"> Insert New Data </a></button></b>
            &emsp;
            <br>
            <br>

            <ul class="nav navbar-light bg-light">
                <?php foreach($result as $menu_item): ?>
                    <li class="nav-item active">
                            <a class="nav-link-active" href="index.php?subject='<?php echo $menu_item["item_no"];?>'">
                               <b><kbd><?php echo $menu_item["item_no"];?></kbd></b>
                            </a>
                        &emsp;    
                    </li>
                <?php endforeach; ?>
            </ul>
            <br>
        </div>
    </div>
    
    <!-- display record in div below -->
    <div class="row">
        <div class="col">
            <?php
                
                if(isset($_GET['subject'])){
                    // Remove single quotes from page get value
                    $item_number = trim($_GET['subject'],"'");
                    
                    // Run sql command to select record based on get value
                    $record = $connection->query("select * from subject where Item_No = '$item_number'") or die($connection->error);

                    // Convert $record into an array for us to print out the individual fields on screen
                    $row = $record -> fetch_assoc();

                    // Create variables to contain data from all fields of table
                    $item = $row['item_no'];
                    $Object_class = $row['object_class'];
                    $Subject_image = $row['subject_image'];
                    $pro1 = $row['pro1'];
                    $Description = $row['description'];
                    $reference = $row['reference'];
                    $extra_1 = $row['extra_1'];
                    $extra_2 = $row['extra_2'];

                    // Create variables to hold update and delete url
                    $id = $row['id'];
                    $update = "forms/update.php?update=" . $id;
                    $delete = "forms/process.php?delete=" . $id;

                    // Replace '/n' with actual new line
                    $Object_class = str_replace('/n','<br><br>',$Object_class);
                    $pro1 = str_replace('/n','<br><br>',$pro1);
                    $Description = str_replace('/n','<br><br>',$Description);
                    $reference = str_replace('/n','<br><br>',$reference);
                    $extra_1 = str_replace('/n','<br><br>',$extra_1);
                    $extra_2 = str_replace('/n','<br><br>',$extra_2);

                    // Bold titles in the string with string replace
                    //$Reference = htmlspecialchars($Reference);
                    
                    // Display info on screen
                    // If subject does NOT have an image
                    if($Subject_image == NULL){   
                        // If subject does NOT a reference                     
                        if($reference == NULL){
                            echo "
                            <div class='form-group row' id='shadow'>
                            <div class='col bg-light text-dark' id='shadow'>
                            <h2> Item #: {$item} </h2>
                            <h3> Object Class: {$Object_class} </h3>
                            <h3> Procedures </h3>
                            <p> {$pro1} </p>
                            <h3> Description </h3>
                            <p> {$Description} </p>
                            <p> {$extra_1} </p>
                            <p> {$extra_2} </p>
                            </div>
                            </div>
                            ";

                            // Displaying update and delete buttons
                            echo"
                            <p>
                            <a href='{$update}' class='btn btn-warning button' style='background-color: yellow;'>Update</a>
                            <a href='{$delete}' class='btn btn-danger button' style='background-color: red;'>Delete</a>
                            ";
                        }
                        // If Subject does NOT have an image but have a reference
                        else{
                            echo "
                            <div class='form-group row' id='shadow'>
                            <div class='col bg-light text-dark' id='shadow'>
                            <h2> Item #: {$item} </h2>
                            <h3> Object Class: {$Object_class} </h3>
                            <h3> Procedures </h3>
                            <p> {$pro1} </p>
                            <h3> Description </h3>
                            <p> {$Description} </p>
                            <h3> Reference </h3>
                            <p> {$reference} </p>
                            <p> {$extra_1} </p>
                            <p> {$extra_2} </p>
                            </div>
                            </div>
                            ";

                            // Displaying update and delete buttons
                            echo"
                            <p>
                            <a href='{$update}' class='btn btn-warning button' style='background-color: yellow;'>Update</a>
                            <a href='{$delete}' class='btn btn-danger button' style='background-color: red;'>Delete</a>
                            ";
                        }
                    }
                    // If subject have an image
                    else{
                        // If subject does NOT have a reference
                        if($reference == NULL){
                            echo "
                            <div class='form-group row' id='shadow'>
                            <div class='col bg-light text-dark' id='shadow'>
                            <h2> Item #: {$item} </h2>
                            <h3> Object Class: {$Object_class} </h3>
                            <h3> Subject Image </h3>
                            <p> <img src='images/{$Subject_image}' class='img-fluid rounded mx-auto d-block img-responsive'> </p>
                            <h3> Procedures </h3>
                            <p> {$pro1} </p>
                            <h3> Description </h3>
                            <p> {$Description} </p>
                            <p> {$extra_1} </p>
                            <p> {$extra_2} </p>
                            </div>
                            </div>
                            ";

                            // Displaying update and delete buttons
                            echo"
                            <p>
                            <a href='{$update}' class='btn btn-warning button' style='background-color: yellow;'>Update</a>
                            <a href='{$delete}' class='btn btn-danger button' style='background-color: red;'>Delete</a>
                            ";
                        }
                        // If subject have both a reference and an image
                        else{
                            echo "
                            <div class='form-group row' id='shadow'>
                            <div class='col bg-light text-dark' id='shadow'>
                            <h2> Item #: {$item} </h2>
                            <h3> Object Class: {$Object_class} </h3>
                            <h3> Subject Image </h3>
                            <p> <img src='images/{$Subject_image}' class='img-fluid rounded mx-auto d-block img-responsive'> </p>
                            <h3> Procedures </h3>
                            <p> {$pro1} </p>
                            <h3> Description </h3>
                            <p> {$Description} </p>
                            <h3> Reference </h3>
                            <p> {$reference} </p>
                            <p> {$extra_1} </p>
                            <p> {$extra_2} </p>
                            </div>
                            </div>
                            ";

                            // Displaying update and delete buttons
                            echo"
                            <p>
                            <a href='{$update}' class='btn btn-warning button' style='background-color: yellow;'>Update</a>
                            <a href='{$delete}' class='btn btn-danger button' style='background-color: red;'>Delete</a>
                            ";
                        }
                    } 
                }
                else{
                    // if this is the first time index.php is accessed, display the content below
                    echo "
                    
                    <div>
                        <div>
                            <br>
                            <h1 class='jumbotron text-center page-header' id='shadow'><b>SCP Subject Database</b></h1>
                            
                            <p class='text-center'><b><h3 class='jumbotron text-center' id='shadow'>Welcome Agent, use the links above to view subject files or enter new subject data</h3></b></p>

                            <img src='images/scp_console2.jpg' class='img-fluid rounded mx-auto d-block img-thumbnail img-responsive' id='shadow'>                            
                        </div>
                    </div>

                    ";
                }              
            ?>
        </div>
    </div>

    <?php include 'template/footer.php'; ?>

    <?php while($row = $result->fetch_assoc()): ?>
        <div class="container p-3 my-3 bg-dark text-white"><?php echo $row["Item_No"]; ?></div>
        <div class="container p-3 my-3 bg-dark text-white"><?php echo $row["Object_class"]; ?></div>
        <div class="container p-3 my-3 bg-dark text-white"><?php echo $row["pro1"]; ?></div>
        <div class="container p-3 my-3 bg-dark text-white"><?php echo $row["Description"]; ?></div>
        <div class="container p-3 my-3 bg-dark text-white"><?php echo $row["reference"]; ?></div>
    <?php endwhile; ?>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>