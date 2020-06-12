<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="../images/scp_logo2.jpg">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <?php include '../template/header.php'; ?>

    <title>Add a new record</title>

    <style type="text/css">
      .my-css{
        background: url(black-brick-wall-18482.jpg) left top repeat;
      }

      .scrollabletextbox {
        height:100px;
        width:1100px;
        font-family: Verdana, Tahoma, Arial, Helvetica, sans-serif;
        font-size: 82%;
        overflow:auto;
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

      #my-bg{
        background: linear-gradient(to bottom left, #343a40 0%, #6c757d 100%);
      }

      #my-bg2{
        background: linear-gradient(to bottom, #343a40 0%, #6c757d 100%);
      }

      #shadow{
        border: 1px solid;
        padding: 10px;
        box-shadow: 5px 10px 15px 15px black;
      }

      .bricks{
        background: url(../images/black-brick-wall-18482.jpg) left top repeat;
      }
    </style>
  </head>
  <body class="container" style="background: url(../images/14fc5c2f47586ef4be1d6d066253f3a8.jpg) left top repeat">

    <div class="jumbotron text-center text-light" id="shadow" style="background: url(../images/14fc5c2f47586ef4be1d6d066253f3a8.jpg) left top repeat">
      <h1>Add a new record to the page !!!</h1>
      <p><i><b>This form is use to enter a new record</b></i></p> 
    </div>
    
    <?php include 'process.php'; ?> <!--Include process.php file into webpage-->

    <div class="form-group row">
      <div class="col text-light">

      <form action="process.php" method="post">
          <label><h4>Item no: </h4></label>
          <input type="text" name="ItemNo" placeholder="Enter Item No (Use /n for new line)" pattern="[a-zA-Z0-9\s]+" required class="form-control scrollabletextbox">
          <br>

          <label><h4>Object Class: </h4></label>
          <textarea name="ObjectClass" placeholder="Enter Object Class (Use /n for new line)" class="form-control scrollabletextbox"></textarea>
          <br>

          <label><h4>Subject Image: </h4></label>
          <input type="file" name="SubjectImage" placeholder="Enter Path of Subject Image with extention i.e. tree.jpg (Use /n for new line)" class="form-control scrollabletextbox"></textarea>
          <!--<input type='file' name='subject_image' placeholder='Enter The Subject Image Here:' class='form-control'>-->
          <br>

          <label><h4>Procedures: </h4></label>
          <textarea name="pro1" placeholder="Enter Procedures (Use /n for new line)" class="form-control scrollabletextbox"></textarea>
          <br>

          <label><h4>Description: </h4></label>
          <textarea name="Description" placeholder="Enter Description (Use /n for new line)" class="form-control scrollabletextbox"></textarea>
          <br>

          <label><h4>References: </h4></label>
          <textarea name="reference" placeholder="Enter References (Use /n for new line)" class="form-control scrollabletextbox"></textarea>
          <br>

          <label><h4>Extra Field #1: </h4></label>
          <textarea name="ExtraField1" placeholder="Enter Any Extra Data (Use /n for new line)" class="form-control scrollabletextbox"></textarea>
          <br>

          <label><h4>Extra Field #2: </h4></label>
          <textarea name="ExtraField2" placeholder="Enter Any Extra Data (Use /n for new line)" class="form-control scrollabletextbox"></textarea>
          <br>

          <button name="AddButton" type="submit" class="btn btn-primary button bg-dark"> <span> Add </span> </button>
          <br>
        </form>
      </div>    
    </div>

    <?php include '../template/footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>