<!DOCTYPE html>
<html>
<head>
  <title>Log In</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href="images/logo.jpg" type="image/x-icon" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-image: url('images/background.png');
      background-size: cover;
      font-family: 'Montserrat', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .log-in-design {
      padding: 40px;
      background: white;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }

    #logo-name {
      font-size: 2em;
      color: #3b99e0;
    }

    .icon-design {
      position: absolute;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      color: #3b99e0;
    }

    .search-design {
      padding-left: 35px;
      height: 40px;
    }

    .form-group {
      position: relative;
      margin-bottom: 20px;
    }

    #login {
      background-color: #3b99e0;
      color: white;
      width: 100%;
    }
  </style>
</head>
<body>

<?php
session_start();
if(isset($_POST['username'])){
    header('Location: Index.php');
    exit();
}
?>

<div class="log-in-design text-center">
  <span id="logo-name">King & Queen Tea</span>
  <hr>
  <form action="login_process.php" method="POST">
    <div class="form-group position-relative">
      <div class="icon-design">
        <i class="fas fa-user"></i>
      </div>
      <input name="username" type="text" class="form-control search-design" placeholder="Username" pattern="[A-Za-z][A-Za-z0-9]*[0-9]*" title="Invalid Username" required>
    </div>
    <div class="form-group position-relative">
      <div class="icon-design">
        <i class="fas fa-lock"></i>
      </div>
      <input type="password" id="pwd" name="password" class="form-control search-design" placeholder="Password" pattern="[A-Za-z][A-Za-z0-9]*[0-9]*" title="Invalid Password" required>
    </div>
    <button id="login" class="btn btn-default" type="submit">Login</button>
  </form>
</div>

</body>
</html>
