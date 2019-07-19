<?php

include_once '../database/dbconnection.php';


class Customer extends Databases {

    public function insert($name, $address, $contact, $car_model, $price, $payment) {
        $ret = mysqli_query($this->con, "insert into customers(name,address,contact,car_model,price,payment) values('$name','$address','$contact','$car_model','$price','$payment')");
        return $ret;
    }

}

class display extends Databases 
{

    public function select($table_name) 
    {
        $array = array();
        $query = "select *from " .$table_name. "";
        $result = mysqli_query($this->con, $query);
        while ($row = mysqli_fetch_assoc($result))
        {
            $array[] = $row;
        }

        return $array;
    }

}

class database extends Databases 
{

    public function required_validation($field)
     {
        $count = 0;
        foreach ($field as $key => $value) 
        {
            if (empty($value)) 
            {
                $count++;
                $this->error .= "<p>" . $key . " is required</p>";
            }
        }
        if ($count == 0) {
            return true;
        }
    }

    public function can_login($table_name, $where_condition)
     {
        $condition = '';
        foreach ($where_condition as $key => $value) 
        {
            $condition .= $key . " = '" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $query = "SELECT * FROM " . $table_name . " WHERE " . $condition;
        $result = mysqli_query($this->con, $query);
        if (mysqli_num_rows($result)) 
        {
            return true;
        } else
         {
            $this->error = "Wrong Data";
        }
    }

}

class update extends Databases 
{

    public function select_record($table, $where)
    {
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) 
        {
            $condition .= $key . " = '" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $sql = "SELECT * FROM " . $table . " WHERE " . $condition;

        $query = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_array($query);
        return $row;
    }

    public function update_record($table, $where, $fields) 
    {

        $sql = "";
        $condition = "";

        foreach ($where as $key => $value)
         {
            $condition .= $key . " = '" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        foreach ($fields as $key => $value) 
        {
            $sql .= $key . "='" . $value . "', ";
        }
        $sql = substr($sql, 0, -2);
        $sql = "UPDATE " . $table . " SET " . $sql . " WHERE " . $condition;
        echo $sql;

        if (mysqli_query($this->con, $sql)) 
        {

            return true;
        }
    }

    public function delete_record($table, $where)
    {
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) 
        {
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $sql = "DELETE FROM " . $table . " WHERE " . $condition;
        if (mysqli_query($this->con, $sql))
         {
            return true;
        }
    }

}

class export extends Databases
{
    public function select($table) 
    {
        $array = array();
       
        $query = "SELECT * FROM " . $table . "";
        $result = mysqli_query($this->con, $query);
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $array[] = array(
            "name" => $row["name"],
            "address" => $row["address"],
            "contact" => $row["contact"],
            "car_model" => $row["car_model"],
            "price" => $row["price"],
            "payment" => $row["payment"] 
        );
        }
        
       
        return json_encode($array);
        
    }

}

class import extends Databases
 {

    public function importdata($table)
     {
        copy($_FILES['jsonFile']['tmp_name'], '../uploads/' . $_FILES['jsonFile']['name']);
        $data = file_get_contents('../uploads/' . $_FILES['jsonFile']['name']);
        $array = json_decode($data, true);
        foreach ($array as $row) 
        {

            echo $row['name'];
            echo '<br>' . $row['address'] . '<br>' . $row['contact'] . '<br>' . $row['car_model'] . '<br>' . $row['price'] . '<br>' . $row['payment'] . '<br>' . '<br>' . $row['c_id'] . '<br>';
            $sql = "INSERT INTO " . $table . "(name,address,contact,car_model,price,payment,c_id)VALUES('" . $row['name'] . "','" . $row['address'] . "','" . $row['contact'] . "','" . $row['car_model'] . "','" . $row['price'] . "','" . $row['payment'] . "','" . $row['c_id'] . "')";
            $obj = new databases();
            if (mysqli_query($this->con, $sql))
             {
                echo"data inserted";
                header('location:../includes/backup.php');
            }
        }
    }

}


?>