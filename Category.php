<!DOCTYPE html>
<html>
<head>
  <title>Customer </title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/logo.jpg" type="image/x-icon" />

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="CSS/bcontainer.css">
<link rel="stylesheet" type="text/css" href="CSS/Category.css">
<link rel="stylesheet" type="text/css" href="CSS/icon.css">

</head>
<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
  }
?>
<body style="margin:0; padding:0; background-image:url(images/background.png); font-family: Montserrat,sans-serif; " >


<!-- top bar-->
  <div id="top-bar">
   
    <a href="index.php"> <img id="logo" src="images\lo.png"></a>
    <a href="index.php"> <img id="name" src="images\logo-name.png"></a>
   <span id="admin">Buy 1 Take 1<big> Forever<big></span>
      
      <div id="log-out-design">
      
        <a id="log-out" href="Login.php"><span> Log Out</span></a>
      
      </div>
              
   <!--left-sidebar-->
    <div class="left-sidebar">
       <nav class="sidebar-nav">
         <ul id="sidebarnav">
          
             <li > <a href="index.php" ><i class="fas fa-tachometer-alt" style="padding-right:10px;"></i><span>Dashboard</span></a></li>
            <li> <a  href="Customer.php"  ><i class="fas fa-users"  style="padding-right:10px;"></i><span>Customer</span></a></li>
              <li> 
             <div  class="dropdown">
                <button id="active" type="button" name="Item" class=" dropdown-toggle" data-toggle="dropdown"><i class="fas fa-glass-whiskey"style="padding-right:10px;"></i>Category<i class="fas fa-angle-down"style="padding-left:8px;" ></i></button>
                  
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="Product.php">Product</a>
                    <a class="dropdown-item" href="Stock.php">Stock</a>
                  </div>
              </div>
            </li></li>
            <li> <a  href="Supplier.php" ><i class="fas fa-users"style="padding-right:10px;"></i> <span >Supplier</span></a></li>
        
            <li> <a  href="Sales.php" ><i class="fas fa-shopping-cart" style="padding-right:10px;"></i> <span >Sales</span></a></li>
        
            <li> <a  href="Sales-Report.php" ><i class="far fa-chart-bar" style="padding-right:10px;"></i> <span>Sales Report</span></a></li>
            <li>  
              <div class="dropdown">
                <button type="button" name="Item" class=" dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cogs" style="padding-right:10px;"></i>Setting<i class="fas fa-angle-down"style="padding-left:8px;" ></i></button>
                  
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Log Out</a>
                  </div>
              </div>
            </li>
          </ul>
        </nav>
    </div>


    <!--Search-->

  <form>
    <div class="product-search">          
        <input type="text" class="search-design" placeholder="Search Category...">
        <button type="submit" class="searchButton">
        <i class="fa fa-search"></i></button>       
    </div>
  </form>

    <!--CLick to Open Modal-->
  <div id="Add-design">
    <span id="Add" data-toggle="modal" data-target="#myModal"  data-backdrop="false"><i class="fas fa-plus"></i> Add Category</span>
  </div>


<!--Data Table-->

  <table border="0" cellpadding="0" cellspacing="0" align="center" width="46%"style="border:1px solid #242A33;  color:white; position: relative; left: 340px; top:140px; font-size: 17px;">
    
     <tr>
     <th colspan="6" align="center" height="55px" style="border-bottom:1px solid #033; background-color: #242A33; color:#FFF; text-align: center; font-size: 20px;"> Category Information Table</th>
    </tr>
    
      <tr height="30px" >
        <th style="border-bottom:1px solid #333; padding-left: 147px;"> Category </th>
        <th style="border-bottom:1px solid #333; padding-left: 120px;"> Action </th>
      </tr>
      
        <!-- Search goes here! -->
 

  
      <!-- Search end here -->
      
       <?php
require('config.php');
$query="SELECT * FROM category";
$result=mysqli_query($db_link, $query);
while ($row=mysqli_fetch_array($result)){?>
      
      <tr align="center" style="height:25px; ">
        <td style="border-bottom:1px solid #333; "> <?php echo $row['category']; ?> </td>
        <td style="border-bottom:1px solid #333;">
          <a href="delete_category.php?Cat_ID=<?php echo md5($row['Cat_ID']);?>">
        <input type="button" value="Delete" style="width:10; height:15; color:#FFF; background: #900; border:1px solid #900; border-radius:3px;"></a>
        </td>
      </tr>
   <?php
}?>
      
    </table>
    
  </td>
  </tr>
</table>




 <!-- The Modal -->
  <div class="modal custom fade" id="myModal">
    <div class="modal-dialog"  role="document">
      <div class="modal-content">
      
          <!-- Modal Header -->
          <div class="modal-header">
          <h4 class="modal-title">Add Category</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
        

          <!-- Modal body -->
          <div class="modal-body">
    
        <form action="add_Category.php" method="POST">         
            <div class="form-group row">
              <label for="inputName" class="col-sm-3 col-form-label" style="margin-top: 4px;" >Category:</label>
                <div class="col-sm-8">
                    <input type="Category" class="form-control" name="category" id="inputCategory" placeholder="Category"required>
                </div>
            </div>        


           <!-- Modal footer -->
          <div >
            <input type="submit" class="btn btn-default1" id="submit"> 
            <button type="close" class="btn btn-default2" data-dismiss="modal">Close</button>
          </div>
        
        </form> 
              
        
        </div>
    </div>
 </div> 

</body>
</html>