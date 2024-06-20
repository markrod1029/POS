<!DOCTYPE html>
<html>
<head>
  <title>Customer </title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/logo.jpg" type="image/x-icon" />

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"\>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="CSS/bcontainer.css">
<link rel="stylesheet" type="text/css" href="CSS/Stock.css">
<link rel="stylesheet" type="text/css" href="CSS/icon.css">


</head>
<body style="margin:0; padding:0; background-image:url(images/background.png); font-family: Montserrat,sans-serif; " >
<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
  }
?>
 

<!-- top bar-->
  <div id="top-bar">
   
    <a href="index.php"> <img id="logo" src="images\lo.png"></a>
    <a href="index.php"> <img id="name" src="images\logo-name.png"></a>
   <span id="admin">Buy 1 Take 1<big> Forever<big></span>
      
      <div id="log-out-design">
      
        <a id="log-out" href="Logout.php"><span> Log Out</span></a>
      
      </div>
              
   <!--left-sidebar-->
    <div class="left-sidebar">
       <nav class="sidebar-nav">
         <ul id="sidebarnav">
          
             <li > <a href="index.php" ><i class="fas fa-tachometer-alt" style="padding-right:10px;"></i><span>Dashboard</span></a></li>
            <li> <a  href="Customer.php"  ><i class="fas fa-users"  style="padding-right:10px;"></i><span>Customer</span></a></li>
              <li> 
             <div  class="dropdown">
                <button id="active" type="button" name="Item" class=" dropdown-toggle" data-toggle="dropdown"><i class="fas fa-glass-whiskey"style="padding-right:10px;"></i>Stock<i class="fas fa-angle-down"style="padding-left:8px;" ></i></button>
                  
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="Product.php">Product</a>
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
                    <a class="dropdown-item" href="Logout.php">Log Out</a>
                  </div>
              </div>
            </li>
          </ul>
        </nav>
    </div>


    <!--Search-->

   <form action="result_stock.php" method="get" ecntype="multipart/data-form">
    <div class="product-search">          
        <input type="text" name="query" class="search-design" placeholder="Search Stock Name...">
        <button type="submit" name="search" class="searchButton">
        <i class="fa fa-search"></i></button>       
    </div>
  </form>


    <!--CLick to Open Modal-->
  <div id="Add-design">
    <span id="Add" data-toggle="modal" data-target="#myModal"  data-backdrop="false"><i class="fas fa-plus"></i> Add Stock</span>
  </div>

<!--Data Table-->

   <table border="0" cellpadding="0" cellspacing="0" align="center" width="76%"style="border:1px solid #242A33;  color:white; position: relative; left: 120px; top:100px; font-size: 17px;">
    
     <tr>
     <th colspan="6" align="center" height="55px" style="border-bottom:1px solid #033; background-color: #242A33; color:#FFF; text-align: center; font-size: 20px;"> Stocks Information Table</th>
    </tr>
    
      <tr height="30px" >
        <th style="border:1px solid #333;text-align: center; "> Item Name </th>
        <th style="border:1px solid #333;text-align: center; "> Stocks </th>
        <th style="border:1px solid #333;text-align: center; "> Date Aquired </th>
        <th style="border:1px solid #333;text-align: center; "> Date Expired </th>
        <th style="border:1px solid #333;text-align: center; "> Action </th>
      </tr>

      
      
        <!-- Search goes here! -->
 

   
      <!-- Search end here -->
     <?php
          include 'config.php';
          
          if(isset($_GET['search'])){
            $query = $_GET['query'];

            $sql = "select * from stocks where name like '%$query%' or contact like '%$query%'";

            $result = $db_link->query($sql);
            if($result->num_rows > 0){
              while($row = $result->fetch_array()){
    
            ?>
      <tr align="center" style="height:30px; ">
        <td style="border:1px solid #333;text-align: center; "> <?php echo $row['name']; ?> </td>
        <td style="border:1px solid #333;text-align: center; "> <?php echo $row['stocks']; ?> </td>
        <td style="border:1px solid #333;text-align: center; "> <?php echo $row['dateaquired']; ?> </td>
        <td style="border:1px solid #333;text-align: center; "> <?php echo $row['dateexpired']; ?> </td>
        <td style="border:1px solid #333;text-align: center; ">
          <a href="#edit<?php echo $row['Stocks_ID']; ?>" data-toggle="modal" class="btn btn-warning" ><span class="far fa-edit"></span > Edit</a> ||

          <a href="delete_stocks.php?Stocks_ID=<?php echo md5($row['Stocks_ID']);?>" class="btn btn-danger"><span  class="far fa-trash-alt"></span> Delete</a>
          <?php include('modal_stock.php'); ?>

        </td>
      </tr>
    <?php
          
              }

            }else{
              echo "<center>No records</center>";
            }
          }
        $db_link->close();
        ?>
      
    </table>
    




 <!-- The Modal -->
  <div class="modal custom fade" id="myModal">
    <div class="modal-dialog"  role="document">
      <div class="modal-content" style="border-radius: 10px; height: 420px; width: 450px;">
      
          <!-- Modal Header -->
          <div class="modal-header">
          <h4 class="modal-title">Add Stock</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
        

          <!-- Modal body -->
          <div class="modal-body">
    
            <form action="add_stocks.php" method="POST">

              
            <div class="form-group row">
              <label  class="col-sm-3 col-form-label">Item Name:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control"  name="name" placeholder="Name" required>
                </div>
            </div>      




            <div class="form-group row">
              <label  class="col-sm-3 col-form-label">Stock:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="stocks" placeholder="Stock" required>
                </div>
            </div>      

             <div class="form-group row" style="margin-top:20px; ">
              <label  class="col-sm-3 col-form-label">Date Arrival:</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="dateaquired" placeholder="Arrival" required>
                </div>
            </div>     
                        <div class="form-group row" style="margin-top:-8px ">
              <label  class="col-sm-3 col-form-label"> Expiry Date :</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="dateexpired"  placeholder="Expired" required>
                </div>
            </div>   

           <!-- Modal footer -->
          <div >
            <input type="submit" class="btn btn-default1" id="submit" style="position: relative; left:80px; top:3px; background: #242A33; color: white; font-size: 16px;"> 
            <button type="close" class="btn btn-default2" data-dismiss="modal" style="position: relative; left:80px; top:3px; background: #242A33; color: white; font-size: 16px;">Close</button>
          </div>

        </form> 
        
          
        
        </div>
    </div>
 </div> 

</body>
</html>

