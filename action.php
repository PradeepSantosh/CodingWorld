<?php
//session_start();
include 'connect.php';
$name=$_POST['name'];
$gmail=$_POST['gmail'];
$mobile=$_POST['mobile'];
$password=$_POST['psd'];
if(empty($name)||empty($gmail)||empty($mobile)||empty($password)){
    echo "box empty";
    header('location:form.php');

}
else{
    if(isset($_POST['sub1'])){
        $name=$_POST['name'];
        $gmail=$_POST['gmail'];
        $mobile=$_POST['mobile'];
        $password=$_POST['psd'];
       
    
       
          $mysql="INSERT INTO `jack` (Name,Email,Mobile,Password) VALUES ( '$name', '$gmail', '$mobile', '$password')";
        
        $result=mysqli_query($con,$mysql);
       
       
       
        if($result)
    {
        $_SESSION['status1']="Registered Succesfully";
       // $_SESSION['status_code']="success";
        header('location:display.php');
     
    }
    else{
      //  $_SESSION['status']="Unsuccesfull";
      //  $_SESSION['status_code']="error";
        die(mysqli_error($con));
    }
    
    }else
    {
        echo "ur data not update";
    }
}







/*$name=$_POST['name'];
    $gmail=$_POST['gmail'];
    $mobile=$_POST['mobile'];
    $password=$_POST['psd'];
    echo "Name:$name,Gmail: $gmail,Mobile no.:$mobile,Password:$password";*/
    

?>