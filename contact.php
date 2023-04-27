<?php

$conn = mysqli_connect("localhost", "root", "", "db_mathaino");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo"error";
}

if (isset($_POST['send'])) {
    
    $username = mysqli_real_escape_string($conn, $_POST['u_name']);
    $email = mysqli_real_escape_string($conn, $_POST['e_mail']);
    $message = mysqli_real_escape_string($conn, $_POST['messsage']);
    //$additional = mysqli_real_escape_string($conn, $_POST['addtional']);
    echo"username";
    
    $sql = "INSERT INTO contactus(u_name, e_mail, messsage) VALUES ('$username', '$email', '$message')";
        
    if (mysqli_query($conn, $sql)) {      
    header("refresh:0, url=index.php");
    } 
    else {
        echo "Error: " . mysqli_error($conn);
    }
    
}


mysqli_close($conn);
?>