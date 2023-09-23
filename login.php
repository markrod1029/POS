<!DOCTYPE html>
<html>
<head>
  <title> Log In</title>

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/logo.jpg" type="image/x-icon" />

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="CSS/bcontainer.css">
<link rel="stylesheet" type="text/css" href="CSS/icon.css">
<link rel="stylesheet" type="text/css" href="CSS/login.css">


</header>
<?php
session_start();
if(isset($_POST['username'])){
    header('localhost:Index.php');
    }

?>
<body style="margin:0; padding:0; background-image:url(images/background.png); font-family: Montserrat,sans-serif; " >

      <div class="log-in-design">
        <span id="logo-name">King & Queen Tea</span>
        <hr>
        <form action="login_process.php" method="POST" >
            
              <div class="position1">     
                <div class="icon-design">
                    <i class="fas fa-user"></i>
                  </div> 
                  <input name="username" type="text" class="search-design" placeholder="Username" pattern="[A-Za-z][A-Za-z0-9]*[0-9]*"title="Invalid Username " required>     
              </div>
  
            <div class="position2">     
                <div class="icon-design">
                    <i class="fas fa-lock"></i>
                  </div> 
                  <input type="password" id="pwd" name="password" class="search-design" placeholder="pasword" pattern="[A-Za-z][A-Za-z0-9]*[0-9]*"title="Invalid Password " required>     
              </div>

                <button id="login"class="btn btn-default" type="submit">Login</button>

          </form>

      </div>

        <p>
          
    
</body>
</html>