 <!DOCTYPE html>
<html>
<head>
  <title>Supplier</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/logo.jpg" type="image/x-icon" />

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="CSS/bcontainer.css">
<link rel="stylesheet" type="text/css" href="CSS/Supplier.css">
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
    <span id="admin">Buy 1 Take 1<big> Forever</big></span>
      
      <div id="log-out-design">
      
        <a id="log-out" href="Logout.php"><span> Log Out</span></a>
      
      </div>


      <!--left-sidebar-->

        <div class="left-sidebar">
       <nav class="sidebar-nav">
         <ul id="sidebarnav">
          
           <li > <a href="index.php" ><i class="fas fa-tachometer-alt" style="padding-right:10px;"></i><span>Dashboard</span></a></li>
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

            <li> <a  href="Supplier.php"  id="active"><i class="fas fa-users"style="padding-right:10px;"></i> <span >Supplier</span></a></li>
        
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
      <form action="result_supplier.php" method="get" ecntype="multipart/data-form">
          <div class="supplier-search">
              
              <input type="text" name="query" class="search-design" placeholder="Search Supplier Name...">
                <button type="submit" name="search" class="searchButton">
                  <i class="fa fa-search"></i></button>
            
          </div>
        </form>

      <div id="Add-design">
        <span  id="Add" data-toggle="modal" data-target="#myModal"  data-backdrop="false"><i class="fas fa-plus"></i> Add Supplier</span>
       </div>

       <!--Data Table-->

  <table border="0" cellpadding="0" cellspacing="0" align="center" width="76%"style="border:1px solid #242A33;  color:white; position: relative; left: 120px; top:100px; font-size: 17px;">
    
     <tr>
     <th colspan="6" align="center" height="55px" style="border-bottom:1px solid #033; background-color: #242A33; color:#FFF; text-align: center; font-size: 20px;"> Supplier Information Table</th>
    </tr>
    
      <tr height="30px" >
        <th style="border:1px solid #333;text-align: center; "> Supplier Name </th>
        <th style="border:1px solid #333;text-align: center; "> Contact Person </th>
        <th style="border:1px solid #333;text-align: center; "> Address </th>
        <th style="border:1px solid #333;text-align: center; "> Cntact </th>
        <th style="border:1px solid #333;text-align: center; "> Action </th>
      </tr>
      
        <!-- Search goes here! -->
 

  
      <!-- Search end here -->
      
             <?php
          include 'config.php';
          
          if(isset($_GET['search'])){
            $query = $_GET['query'];

            $sql = "select * from supplier where name like '%$query%' or contact like '%$query%'";

            $result = $db_link->query($sql);
            if($result->num_rows > 0){
              while($row = $result->fetch_array()){
    
            ?>
      
      <tr align="center" style="height:25px; ">
        <td style="border:1px solid #333;text-align: center; "> <?php echo $row['name']; ?> </td>
        <td style="border:1px solid #333;text-align: center; "> <?php echo $row['person']; ?> </td>
        <td style="border:1px solid #333;text-align: center; "> <?php echo $row['address']; ?> </td>
        <td style="border:1px solid #333;text-align: center; "> <?php echo $row['contact']; ?> </td>
        <td style="border:1px solid #333;text-align: center; ">
          
          <a href="#edit<?php echo $row['Supplier_ID']; ?>" data-toggle="modal" class="btn btn-warning" ><span class="far fa-edit"></span > Edit</a> ||

          <a href="delete_supplier.php?Supplier_ID=<?php echo md5($row['Supplier_ID']);?>" class="btn btn-danger"><span  class="far fa-trash-alt"></span> Delete</a>
         <?php include('modal_supplier.php'); ?>

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
    
  </td>
  </tr>
</table>


 
 <!-- The Modal -->
  <div class="modal custom fade" id="myModal">
    <div class="modal-dialog"  role="document">
      <div class="modal-content">
      
          <!-- Modal Header -->
          <div class="modal-header">
          <h4 class="modal-title">Add Supplier</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
        

          <!-- Modal body -->
          <div class="modal-body">
            <form action="add_supplier.php" method="POST">
             

             <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Name:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="name" placeholder="Supplier Name"  required>
                  </div>  
              </div>        
            
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Person:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="person" placeholder="Contact Person" required>
                  </div>
              </div>   
                        
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Address:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="address"  placeholder="Location"  required>
                  </div>
              </div>        

              <div class="form-group row">
                <label for="inputContact" class="col-sm-3 col-form-label">Number:</label>
                  <div class="col-sm-7">
                    <input type="number" class="form-control" name="contact" placeholder="Contact" required>
                  </div>
              </div>
            

               <div >
                <input type="submit" class="btn btn-default1" id="submit"> 
                <button type="close" class="btn btn-default2" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
        </div>
    </div>
 </div> 


</body>
</html>