<?php

include 'connect.php';


if (isset($_POST['std_delete'])) {
    $id = $_POST['del_id'];
    $sql = "DELETE FROM jack WHERE `jack`.`Serial No` = $id";
    $result = mysqli_query($con, $sql);
    if ($result) {

        $_SESSION['status']="Successful Deleted";
       // echo $_SESSION['status'];
        

        //echo "<script>confirm('Record Deleted')</script>";

       header('location:display.php');
    } else {

        die(mysqli_error($con));


    }

}



?>