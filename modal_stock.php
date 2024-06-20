
<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['Stocks_ID']; ?>"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" >
        <div class="modal-dialog" style="position: fixed;left: 470px;top:50px;">
            <div class="modal-content"  style="border-radius: 10px; height: 420px; width: 450px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title" id="myModalLabel" style="padding: 20px 0 10px 0;margin-left: 30px;font-size: 30px;">Update Stock</h2>
                </div>
                <div class="modal-body">
        <?php
        $edit=mysqli_query($db_link,"select * from stocks where Stocks_ID='".$row['Stocks_ID']."'");
          $erow=mysqli_fetch_array($edit);
        ?>
        <div class="container-fluid">
      <form method="POST" action="edit_stock.php?Stocks_ID=<?php echo $erow['Stocks_ID']; ?>">



            <div class="form-group row">
              <label  class="col-sm-3 col-form-label" style="color:black;">Item Name:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control"  name="name" placeholder="Name" value="<?php echo $erow['name']; ?>" required>
                </div>
            </div>      




            <div class="form-group row">
              <label  class="col-sm-3 col-form-label" style="color:black;">Stock:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="stocks" placeholder="Stock" value="<?php echo $erow['stocks']; ?>" required>
                </div>
            </div>      

             <div class="form-group row" style="margin-top:20px; ">
              <label  class="col-sm-3 col-form-label" style="color:black;">Date Arrival:</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="dateaquired" placeholder="Arrival"  value="<?php echo $erow['dateaquired']; ?>"required>
                </div>
            </div>     
                        <div class="form-group row" style="margin-top:-8px ">
              <label  class="col-sm-3 col-form-label" style="color:black;"> Expiry Date :</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="dateexpired"  placeholder="Expired" value="<?php echo $erow['dateexpired']; ?>" required>
                </div>
            </div>   

           <!-- Modal footer -->
         <div >
           <input type="submit" class="btn btn-default"  style="position: relative;left:-30px;top: -3px;background: #242A33;color: white;font-size: 16px"> 

            <button type="close" class="btn btn-default" data-dismiss="modal" style="position: relative;left:-30px;top: -3px;background: #242A33;color: white;font-size: 16px">Close</button>
          </div>

        </form> 
        
        </div>
    </div>
 </div> 