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

    <title>Update a record</title>

    <style>
      .my-css{
            background: url(images/img_tree.gif) right center no-repeat, url(images/img_flwr.gif) left bottom no-repeat, url(images/bg_repeat1.jpg) left top repeat;
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
    </style>
  </head>
  <body class="container my-css" style="background: url(../images/14fc5c2f47586ef4be1d6d066253f3a8.jpg) left top repeat">

    <div class="jumbotron text-center text-light" id="shadow" style="background: url(../images/14fc5c2f47586ef4be1d6d066253f3a8.jpg) left top repeat">
      <h1>Update a record of the page !!!</h1>
      <p><i><b>This form is use to update an existing record</b></i></p> 
    </div>
    
    <?php include 'process.php'; ?> <!--Include process.php file into webpage-->

    <div class="form-group row">
      <div class="col text-light">

        <?php
            include 'process.php';
            $id = $_GET['update'];
            $record = $connection->query("select * from subject where id=$id") or die($connection->error());
            $row = $record->fetch_assoc();
        ?>

        <form action="process.php" method="post">

          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

          <label><h4>Item no: </h4></label>
          <textarea name="ItemNo" class="form-control scrollabletextbox"><?php echo $row['item_no']; ?></textarea>
          <br>

          <label><h4>Object Class: </h4></label>
          <textarea name="ObjectClass" class="form-control scrollabletextbox"><?php echo $row['object_class']; ?></textarea>
          <br>

          <label><h4>Subject Image: </h4></label>
          <input type="file" class="form-control scrollabletextbox" name="SubjectImage" value="<?php echo $row['subject_image'] ?>">
          <!--<textarea name="SubjectImage" value="<? echo $row['subject_image'] ?>" class="form-control scrollabletextbox"></textarea>
          <input type='file' name='subject_image' placeholder='Enter The Subject Image Here:' class='form-control'>-->
          <br>

          <label><h4>Procedures: </h4></label>
          <textarea name="pro1" class="form-control scrollabletextbox"><?php echo $row['pro1']; ?></textarea>
          <br>

          <label><h4>Description: </h4></label>
          <textarea name="Description" class="form-control scrollabletextbox"><?php echo $row['description']; ?></textarea>
          <br>

          <label><h4>References: </h4></label>
          <textarea name="reference" class="form-control scrollabletextbox"><?php echo $row['reference']; ?></textarea>
          <br>

          <label><h4>Extra Field #1: </h4></label>
          <textarea name="ExtraField1" class="form-control scrollabletextbox"><?php echo $row['extra_1']; ?></textarea>
          <br>

          <label><h4>Extra Field #2: </h4></label>
          <textarea name="ExtraField2" class="form-control scrollabletextbox"><?php echo $row['extra_2']; ?></textarea>
          <br>

          <button name="UpdateButton" type="submit" class="btn btn-primary button bg-dark"> <span> Update </span> </button>
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