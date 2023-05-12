<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM `jack` WHERE `Serial No` = $id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['Name'];
    $email=$row['Email'];
    $mobile=$row['Mobile'];
    $password=$row['Password'];




if(isset($_POST['update'])){
  
    $name=$_POST['name'];
    $gmail=$_POST['gmail'];
    $mobile=$_POST['mobile'];
    $password=$_POST['psd'];
   
   
   $mysql="UPDATE `jack` SET Name = '$name', Email = '$gmail' , Mobile='$mobile', Password='$password' WHERE `jack`.`Serial No` = $id";
    
    $result=mysqli_query($con,$mysql);
    if($result)
{
    echo "update successfull";
    header('location:display.php');

}
else{
    die(mysqli_error($con));
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

   
    <link rel="stylesheet" href="form.css" />
      <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.highlightRegex/0.1.2/highlightRegex.min.js"
    integrity="sha512-zOneUfqoRIN1Tmx816mfN4+vrfGa140jrOYOisH/qJYfs6sOpMZbDzK+VqqX7ohQ2ECPBGBUW8G7/hHULUip3w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>



  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="form1.js"></script>

    
   

    <title>Update Form</title>
    <style>
    
    .error {
      font-size: 12px;
      color: black;
      margin-left: 100px;

    }
  </style>
  </head>

  <body>
    <div class="container my-5">
      <form method="post" action="" id="form123" autocomplete="off">
        <h1 class="my-3">Registration form</h1>
        <div class="form-group">
          <label>Name :</label>
          <input
            type="text"
            class="form1"
            placeholder="Enter your name"
            name="name"
            id="fname"
            
            value="<?php echo $name;
            ?>"
          />
        </div>
        <div class="form-group">
          <label>Email :</label>
          <input
            type="email"
            class="form1"
            placeholder="Enter your email"
            name="gmail"
            value=<?php echo $email;
            ?>
          />
        </div>
        <div class="form-group">
          <label>Mobile :</label>
          <input
            type="number"
            class="form2"
            placeholder="Enter your mobile number"
            name="mobile"
            value=<?php echo $mobile;
            ?>
          />
        </div>
        <div class="form-group">
          <label>Password :</label>
          <input
            type="password"
            class="form3"
            placeholder="Enter your password"
            name="psd"
            value=<?php echo $password;
            ?>
          />
        </div>
        <div class="btn">
          <button type="update"
           name="update" 
           class="btn btn-primary my-2" >
            Update
          </button>
         
        </div>
      </form>
    </div>
  </body>
</html>