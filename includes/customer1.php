<?php
include("link.php");
?>
<body>

 <div class="container-fluid"> 
 	<form action="../model/add_customer.php" method="post" class="form-control">
        <br><br>   	
	
	<?php

      				 require("design.php");
    ?>


	 <div class="row">
			    	<div class="col-md-1 col-md-offset-5">
			    		<input type="submit" name="btn_save" class="btn btn-lg btn-success" value="Save">
			    	</div>
			    			    	
			    	<div class="col-md-1">
			    		<input type="reset" class="btn btn-lg btn-warning" value="Clear">
			    	</div>			    	
	 </div><br>
</form>
</div><!--container-->

</body>

