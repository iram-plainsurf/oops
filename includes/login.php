<?php
include("links.php");
?>


<body>
	<form method="post" action="../model/checklogin.php">
	<div class="container">
		<br><br><br><br><br><br>
		<div class="panel panel-primary">
		  <div class="panel-heading"><center><b><u>Login</u></b></center></div>
			<div class="panel-body">
			    <div class="row">
			    	<div class="col-md-2 col-md-offset-3">
			    		<label>User Name :<label>
			    	</div>
			    	<div class="col-md-3">
			    		<!--<input type="hidden" id="txt_customer_id" >-->
			    		<input type="text" name="username" class="form-control" placeholder="User Name">
			    	    <br><span id="username_error"></span>
			    	</div>
			    </div><br>
			    <div class="row">
			    	<div class="col-md-2 col-md-offset-3">
			    		<label>Password :</label>
			    	</div>
			    	<div class="col-md-3">
			    		<input type="password" name="password" class="form-control" placeholder="Password">
			    	    <br><span id="password_error"></span>
			    	</div>
			    </div><br>

			    <div class="row">
			    	<div class="col-md-2 col-md-offset-4">
			    		<input type="submit" name="btn_login" id="btn_login" class="btn btn-lg btn-success" value="Login">
			    	</div>
			    			    	
			    	<div class="col-md-2">
			    		<input type="reset" class="btn btn-lg btn-warning" value="Clear">
			    	</div>			    	
			    </div>
		    </div>
		</div>
	</div>

</form>
</body>
</html>