
<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['Product_ID']; ?>"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" >
        <div class="modal-dialog" style="position: fixed;left: 470px;top:50px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title" id="myModalLabel" style="padding: 20px 0 10px 0;margin-left: 30px;font-size: 30px;">Update Customer</h2>
                </div>
                <div class="modal-body">
        <?php
        $edit=mysqli_query($db_link,"select * from product where Product_ID='".$row['Product_ID']."'");
          $erow=mysqli_fetch_array($edit);
        ?>
        <div class="container-fluid">
      <form method="POST" action="edit_product.php?Product_ID=<?php echo $erow['Product_ID']; ?>">



            <div class="form-group row">
              <label  class="col-sm-3 col-form-label" style="color:black;">Catecogry:</label>
                <div class="col-sm-7">
                  <select class="form-select"  name="category" style="color:black; width: 175px;" value="<?php echo $erow['category']; ?>">
                     <option>Milk Tea</option>

                  </select> 
                </div>  
            </div>  


            
            <div class="form-group row">
              <label  class="col-sm-3 col-form-label" style="color:black;">Name:</label>
                <div class="col-sm-7">
                    <input type="text" name="name" class="form-control" placeholder="Product Name" value="<?php echo $erow['name']; ?>" required>
                </div>
            </div>        


            <div class="form-group row"  style="margin-top:20px; ">
              <label  class="col-sm-3 col-form-label" style="color:black;" >Selling Price:</label>
                <div class="col-sm-7">
                  <input type="number" name="sellingprice" class="form-control"  placeholder="Selling Price" value="<?php echo $erow['sellingprice']; ?>"  required>
                </div>
            </div>
            
            <div class="form-group row" style="margin-top:-10px; ">
              <label  class="col-sm-3 col-form-label " style="color:black;">quantity:</label>
                <div class="col-sm-7">
                  <input type="number" name="quantity"  class="form-control"  placeholder="Quantity" value="<?php echo $erow['quantity']; ?>"  required>
                </div>
            </div>

            

      
           <!-- Modal footer -->
          <div >
           <a href="products.php"> <input type="submit" class="btn btn-default1" id="submit" style="position: relative;left:-20px;top: -3px;background: #242A33;color: white;font-size: 16px"> 
            <button type="close" class="btn btn-default2" data-dismiss="modal" style="position: relative;left:-20px;top: -3px;background: #242A33;color: white;font-size: 16px">Close</button></a>
          </div>

        </form> 
        
          
        
        </div>
    </div>
 </div> 