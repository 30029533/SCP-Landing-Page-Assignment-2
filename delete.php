<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Delete an existing record</title>

    <style>
      .scrollabletextbox {
        height:100px;
        width:1100px;
        font-family: Verdana, Tahoma, Arial, Helvetica, sans-serif;
        font-size: 82%;
        overflow:auto;
      }
    </style>

  </head>
  <body class="container">

    <div class="jumbotron text-center">
      <h1>Delete an existing record from the page !!!</h1>
      <p><i><b>This form is use to delete an existing record</b></i></p> 
    </div>
    
    <?php include 'app/connection.php'; ?> <!--Include connection.php file into webpage-->

    <div class="form-group">
        <form action="app/connection.php" method="post">
          
          <label>Item no: </label>
          <textarea name="ItemNoDelete" placeholder="Enter Item No" required class="form-control scrollabletextbox"></textarea>
          <br>

          <button type="submit" class="btn btn-primary">Delete</button>
          <br>

        </form>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>