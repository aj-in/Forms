<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $yes = $_POST['yes'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `yes`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$yes', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        

        
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    
    $con->close();
}
?>