<?php
session_start();
$con = new mysqli('localhost','root','','jack');
if($con)
{
    
    
}
else{
    die(mysqli_error($con));
}


?>