<!doctype html>
<html lang="en">
    <head>
        <title>Triel Page</title>
        <style>
            body  {
            background-image: url("Screenshot.jpeg");
            }
</style>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>

    <body>
        <h1>Hello World !!!</h1>
    </body>
</html>

// Delete data from database
    if(isset($_GET['ItemNoDelete'])){
        $ItemNoDelete = $_GET['ItemNoDelete'];

        // Create a delete command
        $sqlDelete = "delete from subject where item_no=$ItemNoDelete";

        // Displaying success or error message
        if($connection->query($sqlDelete) === TRUE){
            echo "
                <h1>Record Deleted Successfully !!!</h1>
                <p><a href='../index.php'>Back to the index page</p>
            ";
        }
        else{
            echo "
                <h1>Error Deleting Data !!!</h1>
                <p>{$connection->error()}</p>
                <p><a href='../index.php'>Back to the index page</p>
            ";
        }
    }