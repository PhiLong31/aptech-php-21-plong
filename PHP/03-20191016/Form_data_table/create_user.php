<?php
    
    require_once("connection.php");
        
    $sql_data_table = "select * from $dbbase.$table"; // Get all data of table
    $data_table = $conn->query($sql_data_table);
    
    $sql_columns_table = "select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME= 'users' and table_schema = 'ap_21_3'"; // Get all columns name of table
    $columns_table = $conn->query($sql_columns_table);

    if(isset($_GET["create"])){
        if(trim($_GET["last_name"] != "")){
            // Check exist of user
                // Create user if not exist
                $last_name = $_GET["last_name"];
                $first_name = $_GET["first_name"];
                $address = $_GET["address"];
                $city = $_GET["city"];
                $user = $_GET["user"];
                $pass = $_GET["pass"];
                $roles_id = $_GET["roles_id"];
                $sql_create_user = "insert into `$dbbase`.`$table` (`last_name`, `first_name`, `address`, `city`,`user`,`pass`,`roles_id`) values('$last_name', '$first_name', '$address', '$city', '$user', '$pass', '$roles_id');";
                $resultelse = $conn->query($sql_create_user);
                if($resultelse) {
                    echo "<script type='text/javascript'>alert('Created users');</script>";
                    $url = $_SERVER["PHP_SELF"];
                    header("Location: $url");
                }
                else echo "<script type='text/javascript'>alert('Create Failed');</script>";
            

        }
        else{
            // If don't values in form
            $url = $_SERVER["PHP_SELF"];
            header("Location: $url");
            $message = "Khong de trong";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
    
?>