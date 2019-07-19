<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
            <?php
            if (isset($_GET["update"])) {

                $c_id = $_GET["c_id"] ?? null;
                $where = array("c_id" => $c_id,);
                $row = $data->select_record("customers", $where);
               
                ?>

                <form  method="post" action="">
                    <div >
                        <span class="login100-form-title">update Customer details</span>
                        <input  type="hidden" name="c_id"  value="<?php echo $c_id; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter name">
                        <input class="input100" type="text" name="name"  value="<?php echo $row['name']; ?>">
                        <span class="focus-input100" data-placeholder="name" ></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter address">
                        <input class="input100" type="address" name="address" value="<?php echo $row['address']; ?>">
                        <span class="focus-input100" data-placeholder="address"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter contact">
                        <input class="input100" type="text" name="contact" value="<?php echo $row['contact']; ?>">
                        <span class="focus-input100" data-placeholder="contact"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter car_model">
                        <input class="input100" type="tel" name="car_model"value="<?php echo $row['car_model']; ?>">
                        <span class="focus-input100" data-placeholder="car_model"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-50" data-validate="price">
                        <input class="input100" type="text" name="price" value="<?php echo $row['price']; ?>">
                        <span class="focus-input100" data-placeholder="price"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-50" data-validate="payment">
                        <input class="input100" type="text" name="payment" value="<?php echo $row['payment']; ?>">
                    <span class="focus-input100" data-placeholder="payment"></span>
                    </div>

                    <div class="container-login100-form-btn">                     
                     <button class="login100-form-btn" type="submit" name="edit" value="Update">
                        update
                    </button>
                   
                    </div>

                    
                


            </form>
        </div>
<?php
            }
            ?>


        </div>
    </div>
</div>


