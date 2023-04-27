<?php




session_start();



$conan = mysqli_connect("localhost", "root", "", "db_mathaino");


if (isset($_POST['login'])) {
    
    $username = $_POST['u_name'];
    $password = $_POST['psame'];

    
    $query = "SELECT * FROM users WHERE u_name='$username' LIMIT 1";
    $result = mysqli_query($conan, $query);
    $user = mysqli_fetch_assoc($result);

    
    if ($user &&  $user['psame'] ==$password) {
        
        echo $_SESSION['u_name'] = $user['u_name'];
        
        header("refresh:0, url = index.php");
        
       
    } else {
        
        echo "<script>alert('Invalid username or password')</script>";
        header("refresh:0, url = loginp.php");
    }
}

?>