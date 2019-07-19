<?php
//include '../database/dbconnection.php';  
include '../controller/controller.php';  
$insertdata=new Customer();
if(isset($_POST['btn_save']))
{
	//alert("hello");

$name=$_POST['name'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$car_model=$_POST['car_model'];
$price=$_POST['price'];
$payment=$_POST['payment'];
$sql=$insertdata->insert($name,$address,$contact,$car_model,$price,$payment);
if($sql)

{
echo "<script>alert('Data inserted');</script>";

//header("location:/view/customer.php", 301);
}
else
{
echo "<script>alert('Data NOT inserted');</script>";

}
}
 ?>