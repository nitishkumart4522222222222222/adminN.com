<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN </title>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <script src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="css/from.css" />
</head>

<body>
  <div class="container "
    style="margin-top: 10%; text-align:center; background: url(https://images.unsplash.com/photo-1553356084-58ef4a67b2a7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80)">
    <div class="row">
      <div class="col-lg-12 login_page">
        <h1>LOGIN</h1>
      </div>
    </div>
    <form action="phpconnect.php" method="post">
      <div class="row ">
        <div class="col-lg-12">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp"
              placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
              placeholder="Password">
          </div>

          <button type="submit" class="btn btn-primary Login_page"
            style="margin-top:3%;text-align:center;">LOGIN</button>
    </form>
  </div>
  </div>
  </div>
</body>

</html>