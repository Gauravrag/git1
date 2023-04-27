<?php

$conn = mysqli_connect("localhost", "root", "", "db_mathaino");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    
    $username = mysqli_real_escape_string($conn, $_POST['u_name']);
    $email = mysqli_real_escape_string($conn, $_POST['e_mail']);
    $password = mysqli_real_escape_string($conn, $_POST['psame']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['csame']);
    
    
    if ($password != $confirm_password) {
        echo "Passwords do not match.";
    } else {
        
        
        
        $sql = "INSERT INTO users (u_name, e_mail, psame, csame) VALUES ('$username', '$email', '$password', '$confirm_password')";
        
        if (mysqli_query($conn, $sql)) {
            
            session_start();
            $_SESSION['u_name'] = $username;
            $_SESSION['e_mail'] = $email;
            
            
            setcookie("user", $username, time() + 3600);
            
          
            header("refresh:0, url=loginp.php");
        } 
        else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}


mysqli_close($conn);
?>
