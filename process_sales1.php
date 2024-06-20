<!DOCTYPE html>
<html>
<head>
  <title>Sales Report</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/logo.jpg" type="image/x-icon" />

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="CSS/bcontainer.css">
<link rel="stylesheet" type="text/css" href="CSS/Sales.css">
<link rel="stylesheet" type="text/css" href="CSS/icon.css">



</head>
<body style="margin:0; padding:0; background-image:url(images/background.png); font-family: Montserrat,sans-serif;     overflow: hidden; " >
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

            <li> <a  href="Supplier.php" ><i class="fas fa-users"style="padding-right:10px;"></i> <span >Supplier</span></a></li>
        
            <li> <a  href="Sales.php" id="active" ><i class="fas fa-shopping-cart" style="padding-right:10px;"></i> <span >Sales</span></a></li>
        
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
    

      <form>
          <div class="sales-search">
              
              <input type="text" class="search-design" placeholder="Search Sales...">
                <button type="submit" class="searchButton">
                  <i class="fa fa-search"></i></button>
            
          </div>
      </form>


   <table border="0" cellpadding="0" cellspacing="0" align="center" width="76%"style="border:1px solid #242A33;  color:white; position: relative; left: 320px; top:100px; font-size: 17px;">
   
    
     <tr>
     <th colspan="6" align="center" height="55px" style="border-bottom:1px solid #033; background-color: #242A33; color:#FFF; text-align: center; font-size: 20px;"> Sales Information Table</th>
    </tr>

      <tr height="30px">
        <th style="border:1px solid #333;text-align: center; "> Category </th>
        <th style="border:1px solid #333;text-align: center; "> Name </th>
        <th style="border:1px solid #333;text-align: center; "> Price </th>
        <th style="border:1px solid #333;text-align: center; " > Quantity Left </th>
        <th style="border:1px solid #333;text-align: center; "> Pick Order </th>
      </tr>
      
        <!-- Search goes here! -->
 

  
      <!-- Search end here -->
      

       <?php
require('config.php');
$query="SELECT * FROM `product`";
$result=mysqli_query($db_link, $query);
while ($row=mysqli_fetch_array($result)){?>
      
         <tr align="center" style="height:35px">
        <td style="border:1px solid #333;text-align: center; "> <?php echo $row['category']; ?> </td>
        <td style="border:1px solid #333;text-align: center; "> <?php echo $row['name']; ?> </td>
        <td style="border:1px solid #333;text-align: center; ">₱ <?php echo $row['sellingprice']; ?> </td>
        <td style="border:1px solid #333;text-align: center; "> <?php echo $row['quantity']; ?> pcs. </td>
        <td style="border:1px solid #333;text-align: center; ">
          

          <a href="process_sales1.php?Product_ID=<?php echo md5($erow['Product_ID']);?>" class="btn btn-warning" style="width:90px; height:36px; font-size: 18px; border-radius:5px;"><span class="fas fa-arrow-alt-circle-right"></span > Pick</a>
                  
        </td>
      </tr>
   <?php
}?>
      
        
    
  </td>
  </tr>
</table>
 


 <div class="modal-dialog" role="document" style="position: absolute;left: 470px;top:-5px;">
            <div class="modal-content" style="border-radius: 10px;height: 620px;width: 570px;">

      
          <!-- Modal Header -->
         <div class="modal-header" style="height: 80px;">
          <h2 class="modal-title" style="padding: 0 0 10px 0;margin-left: 178px;font-size: 35px; ">Transaction</h2>
          <button onClick="location.href='Sales1.php'" type="button" class="close" data-dismiss="modal" style="position: relative;top: -70px;">&times;</button>
          </div>

          <?php
include 'config.php';

$ID = $_GET['Product_ID'];
$view = "SELECT * from product where md5(Product_ID) = '$ID'";
$result = $db_link->query($view);
$row = $result->fetch_assoc();

if(isset($_POST['update'])){

  $ID = $_GET['Product_ID'];
  
$view1 = "SELECT quantity from product where md5(Product_ID) = '$ID'";
$result1 = $db_link->query($view);
$row2 = $result->fetch_assoc();
  
  $quant = $_POST['quant'];
  $dates=$_POST['dates'];
  $quant=$_POST['quant'];
  
  $customers=$_POST['customers'];
  $category=$_POST['category'];
  $name=$_POST['name'];
  $amount=$_POST['amount'];
  $quant=$_POST['quant'];
  $total=$_POST['total'];
  $tendered=$_POST['tendered'];
  $changed=$_POST['changed'];
  $prof = $_POST['profit'];

  $insert1 = "UPDATE product set quantity = quantity - '$quant' where md5(Product_ID) = '$ID'";
  $insert = "INSERT INTO sales (dates,customers,category,name,amnt,quantity,total,profit,tendered,changed) VALUES('$dates','$customers','$category','$name','$amount','$quant','$total','$prof','$tendered','$changed')" or die("error".mysqli_errno($db_link));
  $result=mysqli_query($db_link,$insert);
  if($db_link->query($insert1)== TRUE){?>

  <script type="text/javascript">
    window.location.href = "Sales1.php";

  </script><?php
  }
  
  $db_link->close();
}

?>

   

          <!-- Modal body -->
 <div class="modal-body">

     <form action="" method="POST">
        


   
    <br>
    <form action="" method="POST">
    
    <table border="0" align="center">  
    
    <?php
  
  if(isset($_POST['sub']))
  {
  
  @$total = $_POST['total'];
  @$tendered = $_POST['tendered'];
  @$quant = $_POST['quant'];
  @$profit = $_POST['profit'];
  
  @$profit = $profit;
  @$quant = $quant;
  @$ten = $tendered;
  @$change = $tendered - $total;
  }
  
  ?>
    
    <tr>
    <td align="right" style="position: relative;top:-50px;right: 40px;"> Date Today: </td>
    <td style="position: relative;top: -50px; right: 20px;"> <input type="text" name="dates" id="txtbox" value="<?php echo "  ". date("Y/m/d")?>" readonly> </td>
    </tr>

    <tr>
    <td align="right" style="position: relative;top:-35px;right: 40px;">Customers:</td>
    <td >
    <select name="customers" id="txtbox"  style="position: relative;top: -35px; right: 20px; width: 203px; height: 30px; " readonly>
    
    <?php
  require('config.php');
  $query="SELECT * FROM customer";
  $result=mysqli_query($db_link, $query);
  while ($row1=mysqli_fetch_array($result)){?>
    
  <option><?php echo $row1['name']; ?></option>
              
  <?php
}?>
    
    </select>
    </td>
    </tr>
    
    <tr>
    <td align="right" style="position: relative;top:-20px;right: 50px;">Category:</td>
    <td><input type="text" id="txtbox" name="category" value="<?php echo $row['category'];?>" style="position: relative;top: -20px; right: 20px;" readonly><br></td>
    </tr>
    
    <tr>
    <td align="right"  style="position: relative;top:-5px;right: 40px;">Product name:</td>
    <td><input type="text" id="txtbox" name="name" value="<?php echo $row['name'];?>" style="position: relative;top: -5px; right: 20px;" readonly><br></td>
    </tr>
    
      
    <!-- Computation starts here -->
    
    <form method="POST">
    
    <?php
    
  if(isset($_POST['calculate']))
  {
  @$amnt = $_POST['amount'];
  @$quant = $_POST['quant'];
  @$profit = $_POST['profit'];
  @$purchase = $_POST['purchase'];
  
  @$quant = $quant;
  @$total = $amnt * $quant;
  @$profit = $total /$amnt;
  }
  
  
  ?>
    
    <form method="post">

    
    <tr>
    <td align="right" style="position: relative;top:10px;right: 40px;">Selling Amount:</td>
    <td><input type="number" id="txtbox" name="amount" value="<?php echo $row['sellingprice'];?>" style="position: relative;top: 10px; right: 20px;" readonly><br></td>
    </tr>
    
    <tr>
    <td align="right"  style="position: relative;top:25px;right: 50px;">Quantity:</td>
    <td><input type="number" id="txtbox" name="quant" value="<?php echo @$quant ?>" placeholder="quantity" style="position: relative;top: 25px; right: 20px;" required></td>
    </tr>
    
    <tr>
    <td align="right"  style="position: relative;top:40px;right: 40px;">Total Payable Amount:</td>
    <td><input type="number" id="txtbox" name="total" placeholder="Compute"value="<?php echo @$total ?>" style="position: relative;top: 40px; right: 20px;" readonly></td>
    <td><input type="submit" name="calculate" value="Compute" style="position: relative;top: 41px; left: 0px;" ></td>
    </tr>
    
    <tr>
    <td align="right"  style="position: relative;top:55px;right: 50px;">Profit:</td>
    <td><input type="number" id="txtbox" name="profit" placeholder="Compute" value="<?php echo @$profit ?>" style="position: relative;top: 55px; right: 20px;" readonly><br></td>
    </tr>

    </form>
    
    
    <tr>
    <td align="right"  style="position: relative;top:70px;right: 50px;">Customer Money:</td>
    <td><input type="number" id="txtbox" value="<?php echo @$ten ?>" name="tendered" placeholder="Tendered" style="position: relative;top: 70px; right: 20px;"></td>
    <td><input type="submit" value="Calculate" name="sub" style="position: relative;top: 90px;left: 0px;" ></td>
    </tr>
    
    <tr>
    <td  style="position: relative;top:85px;right: 10px;">Return Change:</td>
    <td><input type="number" id="txtbox" placeholder="Calculate" name="changed" value="<?php echo @$change ?>" style="position: relative;top: 85px; right: 20px;" readonly></td>
    </tr>
    
    </form>
    
    <!-- Computation ends here -->
    
    
    <br>
    <tr  align="center">
    <td>&nbsp;  </td>
    <td>
    <br>
    <a href="process.php"><input type="SUBMIT" name="update" id="btnnav" value="Add"  style="position: relative;left:-60px;top: 83px;background: #242A33;color: white;font-size: 20px; width: 70px;"></a>
    <a href="Sales1.php"><input type="button" style="position: relative;left:-60px; top: 83px; background: #242A33;color: white;font-size: 20px;" value="Cancel"></a>
    
    </td>
    </tr>
    
    </table>

 
        </div>
    </div>
 </div> 




</body>
</html>