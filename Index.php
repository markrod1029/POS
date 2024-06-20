<!DOCTYPE html>
<html lang="eng">
<header>

<title>POS System</title> 
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/logo.jpg" type="image/x-icon" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="CSS/bcontainer.css">
<link rel="stylesheet" type="text/css" href="CSS/icon.css">

</header>

<body style="margin:0; padding:0; background-image:url(images/background.png); font-family: Montserrat,sans-serif; " >

<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
  }
?>

<?php

if($_SESSION['access']=='cashier'){
  header('location:Customer1.php');
  }
?>


<!-- top bar-->
  <div id="top-bar">
   
    <a href="index.php"> <img id="logo" src="images\lo.png"></a>
    <a href="index.php"> <img id="name" src="images\logo-name.png"></a>
   <span id="admin">Buy 1 Take 1<big> Forever<big></span>
      
     
  
      <!--left-sidebar-->
    <div class="left-sidebar">
       <nav class="sidebar-nav">
         <ul id="sidebarnav">
          
           <li > <a href="index.php" id="active"><i class="fas fa-tachometer-alt" style="padding-right:10px;"></i><span>Dashboard</span></a></li>
            <li> <a  href="Customer.php" ><i class="fas fa-users"  style="padding-right:10px;"></i><span>Customer</span></a></li>
            <li>
             <div class="dropdown">
                <button type="button" name="Item" class=" dropdown-toggle" data-toggle="dropdown"><i class="fas fa-glass-whiskey"style="padding-right:10px;"></i>Item<i class="fas fa-angle-down"style="padding-left:8px;" ></i></button>
                  
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="Product.php">Product</a>
                    <a class="dropdown-item" href="Stock.php">Stock</a>
                  </div>
              </div>
            </li>


            <li> <a  href="Supplier.php" ><i class="fas fa-users"style="padding-right:10px;"></i> <span >Supplier</span></a></li>
        
            <li> <a  href="Sales.php" ><i class="fas fa-shopping-cart" style="padding-right:10px;"></i> <span >Sales</span></a></li>
        
            <li> <a  href="Sales-Report.php" ><i class="far fa-chart-bar" style="padding-right:10px;"></i> <span>Sales Report</span></a></li>
            <li>  
              <div class="dropdown">
                <button type="button" name="Item" class=" dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cogs" style="padding-right:10px;"></i>Setting<i class="fas fa-angle-down"style="padding-left:8px;" ></i></button>
                  
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="logout.php">Log Out</a>
                  </div>
              </div>
            </li>
          
          </ul>
        </nav>
    </div>
       

       <div>
        <span id="Dashboard"> Dashboard</span>
       </div>

        <div id="nav-body">
          
          <table border="0" cellpadding="0" cellspacing="10" align="center">
            <tr>
              
              <td><a href="Customer.php"><input type="button" id="b1" class="b-design"></a></td>
              <td><a href="Product.php"><input type="button" id="b2" class="b-design"></a></td>
              <td><a href="Supplier.php"><input type="button" id="b3" class="b-design"></a></td>
            
            </tr>
              
              <tr>
                <td><a href="Sales.php"><input type="button" id="b4" class="b-design"></a></td>
                <td><a href="Sales-Report.php"><input type="button" id="b5" class="b-design"></a></td>
                <td><a href="logout.php"><input type="button" id="b6" class="b-design"></a></td>
            
              </tr>
          </table>
        </div>


</body>
</html>
