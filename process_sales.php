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
  
  <script type="text/javascript">
    // Function to calculate total and profit
    function calculateTotal() {
      var sellingPrice = parseFloat(document.getElementById('txtbox').value);
      var quantity = parseFloat(document.getElementById('quant').value);
      
      if (!isNaN(sellingPrice) && !isNaN(quantity)) {
        var total = sellingPrice * quantity;
        var profit = total / quantity;
        
        // Update the fields
        document.getElementById('total').value = total.toFixed(2);
        document.getElementById('profit').value = profit.toFixed(2);
      }
    }

    // Function to calculate change
    function calculateChange() {
      var total = parseFloat(document.getElementById('total').value);
      var tendered = parseFloat(document.getElementById('tendered').value);

      if (!isNaN(total) && !isNaN(tendered)) {
        var change = tendered - total;
        document.getElementById('changed').value = change.toFixed(2);
      }
    }
  </script>
</head>
<body>
  <!-- Your HTML content -->
  
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h2 class="modal-title">Transaction</h2>
        <button onClick="location.href='Sales.php'" type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="" method="POST">
          <table border="0" align="center">
            <tr>
              <td align="right">Date Today:</td>
              <td><input type="text" name="dates" id="txtbox" value="<?php echo date("Y/m/d") ?>" readonly></td>
            </tr>
            <tr>
              <td align="right">Customers:</td>
              <td>
                <select name="customers" id="txtbox" style="width: 203px;" readonly>
                  <?php
                  require('config.php');
                  $query="SELECT * FROM customer";
                  $result=mysqli_query($db_link, $query);
                  while ($row1=mysqli_fetch_array($result)){?>
                    <option><?php echo $row1['name']; ?></option>
                  <?php } ?>
                </select>
              </td>
            </tr>
            <tr>
              <td align="right">Category:</td>
              <td><input type="text" id="txtbox" name="category" value="<?php echo $row['category'];?>" readonly><br></td>
            </tr>
            <tr>
              <td align="right">Product name:</td>
              <td><input type="text" id="txtbox" name="name" value="<?php echo $row['name'];?>" readonly><br></td>
            </tr>
            <tr>
              <td align="right">Selling Amount:</td>
              <td><input type="number" id="txtbox" name="amount" value="<?php echo $row['sellingprice'];?>" readonly></td>
            </tr>
            <tr>
              <td align="right">Quantity:</td>
              <td><input type="number" id="quant" name="quant" value="<?php echo @$quant ?>" placeholder="quantity" required onchange="calculateTotal()"></td>
            </tr>
            <tr>
              <td align="right">Total Payable Amount:</td>
              <td><input type="number" id="total" name="total" readonly></td>
            </tr>
            <tr>
              <td align="right">Profit:</td>
              <td><input type="number" id="profit" name="profit" readonly><br></td>
            </tr>
            <tr>
              <td align="right">Tendered:</td>
              <td><input type="number" id="tendered" name="tendered" placeholder="Tendered" onchange="calculateChange()"></td>
            </tr>
            <tr>
              <td>Return Change:</td>
              <td><input type="text" id="changed" name="changed" readonly></td>
            </tr>
            <tr align="center">
              <td>&nbsp;</td>
              <td>
                <br>
                <input type="submit" name="update" id="btnnav" value="Add" style="background: #242A33; color: white; font-size: 20px; width: 70px;">
                <input type="button" onclick="location.href='Sales.php'" value="Cancel" style="background: #242A33; color: white; font-size: 20px;">
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
