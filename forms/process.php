<?php

require '../connection.php';

// Insert data to db
    if(isset($_POST['AddButton'])){
        // Create variables for inserting data
        $ItemNo = mysqli_real_escape_string($connection, $_POST['ItemNo']); 
        $ObjectClass = mysqli_real_escape_string($connection, $_POST['ObjectClass']);
        $SubjectImage = mysqli_real_escape_string($connection, $_POST['SubjectImage']); 
        $pro1 = mysqli_real_escape_string($connection, $_POST['pro1']);
        $Description = mysqli_real_escape_string($connection, $_POST['Description']);
        $reference = mysqli_real_escape_string($connection, $_POST['reference']);
        $ExtraField1 = mysqli_real_escape_string($connection, $_POST['ExtraField1']);
        $ExtraField2 = mysqli_real_escape_string($connection, $_POST['ExtraField2']);

        // Remove 's from data
        $ObjectClass = str_replace("'"," ", $ObjectClass);
        $pro1 = str_replace("'"," ", $pro1);
        $Description = str_replace("'"," ", $Description);
        $reference = str_replace("'"," ", $reference);
        $ExtraField1 = str_replace("'"," ", $ExtraField1);
        $ExtraField2 = str_replace("'"," ", $ExtraField2);
    
        // Create an insert command
        $sql = "insert into subject(item_no, object_class, subject_image, pro1, description, reference, extra_1, extra_2) values('$ItemNo', '$ObjectClass', '$SubjectImage', '$pro1', '$Description', '$reference','$ExtraField1', '$ExtraField2')";

        // Displaying success or error message
        if ($connection->query($sql) === TRUE) {
            include '../template/header.php';
            echo "<div class='alert alert-success'><h1> <strong>Success !!! Record Created Successfully !!! </strong></h1></div>
            <p><a href='../index.php'> <button class='button btn btn-primary'> Back to SCP Main Page </button></a></p>";
            include '../template/footer.php';
        } 
        else {
            include '../template/header.php';
            echo "<div class='alert alert-danger'><h1><strong>Error !!! Creating record !!! </strong>{$connection->error}</h1></div>
            <p><a href='../index.php'><button class='button btn btn-warning'> Back to SCP Main Page </button></p></a>";
            include '../template/footer.php';
        }
    }

    // // Delete data form db
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        // Create delete sql command
        $del = "delete from subject where id = $id";

        // Displaying success or error message
        if($connection->query($del) === TRUE){
            include '../template/header.php';
            echo "<div class='alert alert-success'><h1> <strong>Success !!! Record Deleted Successfully !!! </strong></h1></div>
            <p><a href='../index.php'> <button class='button btn btn-primary'> Back to SCP Main Page </button></a></p>";
            include '../template/footer.php'; 
        }
        else{
            include '../template/header.php';
            echo "<div class='alert alert-danger'><h1><strong>Error !!! Deleting record !!! </strong>{$connection->error}</h1></div>
            <p><a href='../index.php'><button class='button btn btn-warning'> Back to SCP Main Page </button></p></a>";
            include '../template/footer.php';
        }
    }

    // Update data to db
    if(isset($_POST['UpdateButton'])){
        // Create variables for updating data
        $id = $_POST['id'];
        $ItemNo = $_POST['ItemNo'];
        $ObjectClass = $_POST['ObjectClass'];
        $SubjectImage = $_POST['SubjectImage'];
        $pro1 = $_POST['pro1'];
        $Description = $_POST['Description'];
        $reference = $_POST['reference'];
        $ExtraField1 = $_POST['ExtraField1'];
        $ExtraField2 = $_POST['ExtraField2'];

        // Remove 's from data
        $ObjectClass = str_replace("'"," ", $ObjectClass);
        $pro1 = str_replace("'"," ", $pro1);
        $Description = str_replace("'"," ", $Description);
        $reference = str_replace("'"," ", $reference);
        $ExtraField1 = str_replace("'"," ", $ExtraField1);
        $ExtraField2 = str_replace("'"," ", $ExtraField2);
    
        // Create an update command
        $update = "update subject set item_no='$ItemNo', object_class='$ObjectClass', subject_image='$SubjectImage', pro1='$pro1', description='$Description', reference='$reference', extra_1='$ExtraField1', extra_2='$ExtraField2' where id='$id'";

        // Displaying success or error message
        if ($connection->query($update) === TRUE) {
            include '../template/header.php';
            echo "<div class='alert alert-success'><h1> <strong>Success !!! Record Updated Successfully !!! </strong></h1></div>
            <p><a href='../index.php'> <button class='button btn btn-primary'> Back to SCP Main Page </button></a></p>";
            include '../template/footer.php';
        } 
        else {
            include '../template/header.php';
            echo "<div class='alert alert-danger'><h1><strong>Error !!! Updating record !!! </strong>{$connection->error}</h1></div>
            <p><a href='../index.php'><button class='button btn btn-warning'> Back to SCP Main Page </button></p></a>";
            include '../template/footer.php';
        }
    }
?>