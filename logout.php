<?php
session_start();
if(isset($_SESSION['u_name'])){
session_destroy();
header("refresh:0,url=loginp.php");
}
else{
     header("refresh:0,url=loginp.php");
}

?>