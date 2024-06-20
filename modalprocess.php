
<!-- Edit -->
    <div class="modal fade" id="Pick<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  data-backdrop="false"  data-keyboard="false" aria-hidden="true">

   <div class="modal-dialog" role="document" style="position: absolute;left: 470px;top:-5px;">
            <div class="modal-content" style="border-radius: 10px;height: 620px;width: 570px;">


                <div class="modal-header" style="height: 80px;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title" id="myModalLabel" style="padding: 10px 0 10px 0;margin-left: 30px;font-size: 30px;">Transaction</h2>
                </div>
                <div class="modal-body" style="color: black;">

                        <?php
        $edit=mysqli_query($db_link,"select * from product where id='".$row['id']."'");
          $erow=mysqli_fetch_array($edit);
        ?>
  
        <div class="container-fluid">

      <form method="POST" action="sales.php">



    <?php
  
  if(isset($_POST['sub']))
  {
  
  @$total = $_POST['total'];
  @$tendered = $_POST['tendered'];
  @$quantity = $_POST['quantity'];
  @$profit = $_POST['profit'];
  
  @$profit = $profit;
  @$quantity = $quantity;
  @$tendered = $tendered;
  @$changed = $tendered - $total;
  }
  
  ?>



                <div class="form-group row" >
              <label  class="col-sm-3 col-form-label" style="position: relative;top:-20px;right: 40px;"> Date Today:</label>
                <div class="col-sm-7">
                    <input  type="text" name="date" class="form-control" value="<?php echo "  ". date("Y/m/d")?>"  style="position: relative;top: -20px; right: 20px;"s> 
                </div>
            </div>

  


           <div class="form-group row" >
              <label  class="col-sm-3 col-form-label" style="position: relative;right: 30px; top: -25px;">Category:</label>
                <div class="col-sm-7">
                    <input type="text" name="category" class="form-control" placeholder="Category" style="position: relative;top: -30px; right: 18px;"value="<?php echo $row['category']; ?>" readonly>
                </div>
            </div>  


                    <div class="form-group row" >
              <label  class="col-sm-3 col-form-label" style="position: relative;top:-30px;right: 20px;">Name:</label>
                <div class="col-sm-7">
                    <input style="position: relative;top: -35px; right: 18px;" class="form-control"   type="text" name="name" value="<?php echo $erow['name'];?>" readonly>
                </div>
            </div> 


       
    <!-- Computation starts here -->
    
    <form method="POST">
    
    <?php
    
  if(isset($_POST['calculate']))
  {
  @$amount = $_POST['amount'];
  @$quantity = $_POST['quantity'];
  @$profit = $_POST['profit'];
  @$sellingprice = $_POST['sellingprice'];
  
  @$quantity = $quantity;
  @$total = $sellingprice * $quantity;
  @$profit = $total / $sellingprice;
  }
  
  
  ?> 



      <form method="post">

                   <div class="form-group row" >
              <label  class="col-sm-3 col-form-label" style="position: relative;top:-35px;right: 50px; width: 180px;">Selling Amount:</label>
                <div class="col-sm-7">
                    <input type="text" name="sellingprice" class="form-control" placeholder="sellingprice" style="position: relative;top: -40px; right: 74px;" value="<?php echo $erow['sellingprice']; ?>" readonly>
                </div>
            </div>  

                     <div class="form-group row" >
              <label  class="col-sm-3 col-form-label" style="position: relative;right: 30px; top: -25px;">Quantity:</label>
                <div class="col-sm-7">
                    <input type="number" name="quantity"  class="form-control"  placeholder="Quantity" style="position: relative;top: -30px; right: 18px;"value="<?php echo @$quantity ?>">
                </div>
            </div> 

                  <div class="form-group row" >
              <label  class="col-sm-3 col-form-label" style="position: relative;top:-30px;right: 50px; width: 180px;">Payable Amount:</label>
                <div class="col-sm-7">
                   <input type="number" name="total"  class="form-control"  placeholder="Total" style="position: relative;top: -35px; right: 74px;" value="<?php echo @$total ?>" readonly>
                </div>
            </div>  

           

                 <div class="form-group row" >
              <label  class="col-sm-3 col-form-label" style="position: relative;top:-35px;right: 20px;">Profit:</label>
                <div class="col-sm-7">
                    <input type="number" name="profit"  class="form-control"  placeholder="Profit" style="position: relative;top: -40px; right: 18px;"value="<?php echo @$profit ?>" readonly>
                </div>
            </div> 

             <input type="submit" name="calculate" value="Compute" style="position: relative;top: -131px; left: 380px;">



             <div class="form-group row" >
              <label  class="col-sm-3 col-form-label" style="position: relative;top:-55px;right: 48px; width: 180px;">Customer Money:</label>
                <div class="col-sm-7">
                    <input type="number" name="tendered"  class="form-control"  placeholder="Tendered" style="position: relative;top: -60px; right: 74px;"value="<?php echo @$tendered ?>" >
                </div>
            </div> 

  
                 <div class="form-group row" >
              <label  class="col-sm-3 col-form-label" style="position: relative;top:-60px;right: 43px; width: 180px;">Return Change:</label>
                <div class="col-sm-7">
                    <input type="number" name="changed"  class="form-control"  placeholder="Changed" style="position: relative;top: -65px;  right: 74px;" value="<?php echo @$changed ?>" readonly>
                </div>
            </div> 
            <input type="submit" value="Calculate" name="sub" style="position: relative;top: -131px;left: 380px;">
       </form>
    
    <!-- Computation ends here -->

      
          <!-- Modal footer -->

           <a href="process1.php"><input type="SUBMIT" name="update" class="btn btn-default" style="position: relative;left:130px;top: -93px;background: #242A33;color: white;font-size: 16px"> </a> 
            


            <a href="sales.php"><button type="close" class="btn btn-default" data-dismiss="modal" style="position: relative;left:130px;top: -93px;background: #242A33;color: white;font-size: 16px">Close</button></a>
          </div>

        
          
        
        </div>
    </div>
 </div> 


       

   

      


