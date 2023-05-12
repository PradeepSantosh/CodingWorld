<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">




  <title>Display</title>
  <style>
    body {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background: #008080;
    }

    .container {
      max-width: 1200px;
      width: 100%;
      background-color: #FFFFFF;
      text-align: center;
      border: 10px solid rgb(20, 96, 196);
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
      border-radius: 15px;
    }
  </style>
</head>

<body>


  <!-- display button on form -->
  <div class="container my-5">
    <div>
    <button type="submit" name="add" class="btn btn-primary my-2"><a href="form.php" class="text-light">Add
        User</a></button>
        <br></div>
        <!-- delete msg -->
      <?php
    if (isset($_SESSION['status'])) {
      ?>
      <div class="alert alert-primary" role="alert">
        <?php echo $_SESSION['status']; ?>
      </div>
      <?php
      unset($_SESSION['status']);
       }
    ?>
    <!-- delete msg -->


<!-- registered  -->
       <?php
    if (isset($_SESSION['status1'])) {
      ?>
      <div class="alert alert-primary" role="alert">
        <?php echo $_SESSION['status1']; ?>
      </div>
      <?php
      unset($_SESSION['status1']);
       }
    ?>
    <!-- registered  -->
    
    
    

    <table class="table my-4" id="myTable">
      <thead>
        <tr>
          <th scope="col">Serial No.</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Password</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $i = 1;
        $sql = "SELECT * FROM `jack`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['Serial No'];
            $name = $row['Name'];
            $email = $row['Email'];
            $mobile = $row['Mobile'];
            $password = $row['Password'];
            echo '<tr>
        <th  id="del_id" scope="row">' . $id . '</th>
        <td>' . $name . '</td>
        <td>' . $email . '</td>
        <td>' . $mobile . '</td>
        <td>' . $password . '</td>
        <td><button type="submit" name="update" class="btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
        <button type="button" class="btn btn-danger delete_btn" data-toggle="modal" data-target="#studentModal">
  Delete
</button>
        
        </td>
      </tr>';



          }

        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="studentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="studentModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="delete.php" method="post">
          <div class="modal-body">

            <input type="text" name="del_id" id="delete_id">
            <H4>Are u sure to delete data?????</H4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="std_delete" class="btn btn-danger">Yes.! Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- script file -->
  <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

  <script>

    $(document).ready(function () {
      $('.delete_btn').click(function (e) {
        e.preventDefault();
        var del = $(this).closest('tr').find('#del_id').text();
        //console.log(del);
        $('#delete_id').val(del);
      });


    });


    let table = new DataTable('#myTable');
  </script>

</body>

</html>