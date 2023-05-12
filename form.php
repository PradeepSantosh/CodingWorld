<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="form.css" />



  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.highlightRegex/0.1.2/highlightRegex.min.js"
    ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



  

  
  
  <script src="form1.js"></script>


  <title>Form</title>
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
    <form method="post" action="action.php" id="form123">
 
      <h1 class="my-3">Registration form</h1>
      <div class="form-group">
        <label>Name :</label>
        <input type="text" class="form1" placeholder="Enter name" name="name" id="fname" autocomplete="off" />
        <!-- <P id="check" ><small >Error</small></P> -->

      </div>

      <div class="form-group">
        <label>Email :</label>
        <input type="email" class="form1" placeholder="Enter your email" name="gmail" id="femail" autocomplete="off"/>
        <!-- <P id="check1"><small >Error</small></P> -->
      </div>
      <div class="form-group ">
        <label>Mobile :</label>
        <input type="number" class="form2" placeholder="Enter your mobile number" name="mobile" id="number" />
        <!-- <P id="check2"><small >Error</small></P> -->
      </div>
      <div class="form-group">
        <label>Password :</label>
        <input type="password" class="form3" placeholder="Enter your password" name="psd" id="password" />
        <!-- <P id="check3"><small >Error</small></P> -->
      </div>
      <div class="btn">
        <button type="submit" name="sub1" id="btn"  class="btn btn-primary my-2" onclick=" return addData()">
          Submit
        </button>
        <button type="reset" name="reset" class="btn btn-primary">
          Reset
        </button>
      </div>
    </form>
  </div>
  
  
  


  <script>
  function addData(){
//     swal({
//   title: "Good job!",
//   text: "You clicked the button!",
//   icon: "success",
//   button: "ok",
// });
return confirm("Successfull");

  }
</script> 
</body>

</html> 