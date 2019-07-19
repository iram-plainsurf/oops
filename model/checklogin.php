<?php

session_start();
//require('../assets/php/config.php');

$db=mysqli_connect("localhost","root","","cardb1");

if(isset($_POST['btn_login']))
{
	//session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];

	//$password = md5($password);
	$sql="SELECT username, password FROM  car_tbl WHERE username='$username' AND password='$password'";
	$result =mysqli_query($db,$sql);

	$row=mysqli_fetch_array($result);

	if($row)
	{
		if ($row['username'==$username])
		 {
			$_SESSION['username']='$username';
			//include("includes/header.php");
			header("location:../includes/header.php");
		}
		//$_SESSION['message']="you are login";
		//$_SESSION['username']=$username;
		
	}

	else
	{
	header("location:/includes/login.php");
	}
}
?>
