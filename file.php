<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'nav.php'?>
    <div class="container">
        <h1 class="text-center">Signup to our website</h1>
        <form method="post">
  <div class="mb-3 col-sm-6">
    <label for="username" class="form-label">Username</label>
    <input type="email" class="form-control" id="username" name="username">
    
  </div>
  <div class="mb-3 col-sm-6">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3  col-sm-6">
    
    <label class="form-check-label" for="exampleCheck1">Confirm Password</label>
    <input type="password" class="form-control" id="cpsd" name="cpsd">
    <small id="emailHelp" class="form-text">Make sure to tye same password</small>
  </div>
  <button type="submit" class="btn btn-primary col-sm-6">Submit</button>
</form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>