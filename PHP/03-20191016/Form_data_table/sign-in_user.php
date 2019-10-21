<?php
    $check = false;
    if(isset($_POST["sign-in"])){  
        if(trim($_POST["user"]) != ""){            
            require_once("connection.php");
            $user = $_POST["user"];
            $pass = $_POST["pass"];

            $sql = "select * from $dbbase.$table where user = '$user' and pass = '$pass'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                $check = true;
            }
            else echo "<script type='text/javascript'>Tai Khoan khong dung</script>";
        }
    }
    switch($check){
        case true: require_once('index-header-success.php'); break;
        case false: require_once('index-header.php'); break;
    }
?>