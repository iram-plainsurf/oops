<?php
$data = new update();
        
        if(isset($_POST['edit'])) {

         
            $c_id = $_POST["c_id"];
            $where = array("c_id" => $c_id);
            $myArray = array(
                "name" => $_POST['name'],
                "address" => $_POST['address'],
                "contact" => $_POST['contact'],
                "car_model" => $_POST['car_model'],
                "price" => $_POST['price'],
                "payment" => $_POST['payment']
            );
           if( $data->update_record("customers", $where, $myArray)){
              
               header("location:customersDashUD.php");
           }
              
            
        }
  ?>      