
<?php

include_once '../controller/controller.php';
$data = new update();
if (isset($_GET["delete"])) {
    $c_id = $_GET["c_id"] ?? null;
    $where = array("c_id" => $c_id);
    if ($data->delete_record("customers", $where)) {
        header("location:../view/customersDashUD.php");
    }
}
    ?>
