

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['Customer_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h2 class="modal-title" id="myModalLabel" style="position: absolute;left: 110px; ">update Customer</h2></center>
                </div>
                <div class="modal-body">
				<?php
				$edit=mysqli_query($db,"select * from customer where Customer_ID='".$row['Customer_ID']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
			<form method="POST" action="editcustomer.php?Customer_ID=<?php echo $erow['Customer_ID']; ?>">
					
      <label style="margin-right: 13px; position: relative; right: 30px;"><b>Name:</b></label>
       <input type="text" placeholder="Customer Name" name="name" value="<?php echo $erow['name']; ?>" style="margin-right: 13px; position: relative; right: 30px;"  required >
       <br><br>
 
        <label style="margin-right: 13px; position: relative; right: 30px;"><b>Address:</b> </label>
        <input type="text" placeholder="Address" name="address" style="margin-right: 13px; position: relative; right: 30px;" value="<?php echo $erow['address']; ?>" required >
       <br><br>

       <label style="margin-right: 13px; position: relative; right: 30px;"><b>Contact:</b> </label>
      <input type="text" placeholder="Phone Number" name="number" maxlength="11"  style="margin-right: 13px; position: relative; right: 30px;" value="<?php echo $erow['number']; ?>"  required >
      <br><br>
         <input type="submit" name="submit" value="submit" style="position: relative;left:-30px;"/>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal --> 