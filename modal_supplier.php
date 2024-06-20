
<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['Supplier_ID']; ?>"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" >
        <div class="modal-dialog" style="position: fixed;left: 470px;top:50px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title" id="myModalLabel" style="padding: 20px 0 10px 0;margin-left: 30px;font-size: 30px;">Update Supplier</h2>
                </div>
                <div class="modal-body">
        <?php
        $edit=mysqli_query($db_link,"select * from supplier where Supplier_ID='".$row['Supplier_ID']."'");
          $erow=mysqli_fetch_array($edit);
        ?>
        <div class="container-fluid">
      <form method="POST" action="edit_supplier.php?Supplier_ID=<?php echo $erow['Supplier_ID']; ?>">


   <div class="form-group row">
                <label class="col-sm-3 col-form-label" style="color:black;"> Name:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="name" placeholder="Supplier Name" value="<?php echo $erow['name']; ?>" required>
                  </div>  
              </div>        
            
              <div class="form-group row">
                <label class="col-sm-3 col-form-label" style="color:black;">Person:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="person" placeholder="Contact Person" value="<?php echo $erow['person']; ?>" required>
                  </div>
              </div>   
                        
              <div class="form-group row">
                <label class="col-sm-3 col-form-label" style="color:black;">Address:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="address"  placeholder="Location" value="<?php echo $erow['address']; ?>" required>
                  </div>
              </div>        

              <div class="form-group row">
                <label for="inputContact" class="col-sm-3 col-form-label" style="color:black;">Number:</label>
                  <div class="col-sm-7">
                    <input type="number" class="form-control" name="contact" placeholder="Contact" value="<?php echo $erow['contact']; ?>" required>
                  </div>
              </div>
            

              <div >
           <input type="submit" class="btn btn-default" style="position: relative;left:-20px;top: 20px;background: #242A33;color: white;font-size: 16px"> 
            <button type="close" class="btn btn-default" data-dismiss="modal" style="position: relative;left:-20px;top: 20px;background: #242A33;color: white;font-size: 16px">Close</button>
          </div>


        </form> 
        
          
        
        </div>
    </div>
 </div> 