<?php
        include_once '../includes/link.php';
        ?>

<?php
//include("link.php");
?>


 <body>
 			 <div class="container-fluid"> 
 	<form action="../model/add_customerDashUD.php" method="post" class="form-control">
        <br><br>   	
	
	<?php

      				 require("../includes/design.php");
    ?>

			    <!--<div class="row">
			    	<div class="col-md-1 col-md-offset-4">
			    		<input type="submit" name="btn_update" class="btn btn-lg btn-info" value="Update">
			    	</div>
			    			    	
			    	<div class="col-md-1">
			    		<input type="submit" name="btn_clear" class="btn btn-lg btn-warning" value="Clear">
			    	</div>			    	
			    </div><br>-->


			    <div class="row">
			    	<div class="col-md-7 col-md-offset-3">
			    		<table class="table table-striped table-bordered table-hover table-condensed">
			    			 <thead>
			    			 	 <tr>
			    			 	 	<th>Sr.No</th>
			    			 	 	<th>Customer Name</th>
			    			 	 	<th>Address</th>
			    			 	 	<th>Conatct Number</th>
			    			 	 	<th>Car Model</th>
			    			 	 	<th>Price</th>
			    			 	 	<th>Payment</th>
			    			 	 	<th>Action</th>
			    			 	 </tr>
			    			 </thead>
			    			 <tbody id="loadData"></tbody>

			    			 <?php include_once '../controller/controller.php'; ?>

                <?php
                $data = new display;
                $post_data = $data->select('customers');
                //  print_r($post_data);
                foreach ($post_data as $row) {
                      
                    ?>
                    <tr id="<?php echo $row['c_id'] ?>">
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['contact'] ?></td>
                        <td><?php echo $row['car_model'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['payment'] ?></td>
                        <td><a href="../model/delete.php?delete=1&c_id=<?php echo $row["c_id"]; ?>" class="btn btn-danger btn-lg remove" name="delete" >Delete</a></td>
                        <td><a href="edit.php?update=1&c_id=<?php echo $row['c_id']; ?>" class="btn btn-success btn-lg"> Edit</a></td>
                    </tr>

                    <?php
                }
                ?>
			    		</table>
			    	</div>
			    </div>
</body>

</html>