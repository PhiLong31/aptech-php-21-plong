<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <?php
        require_once("connection.php");
        
        $sql_data_table = "select * from $dbbase.$table"; // Get all data of table
        $data_table = $conn->query($sql_data_table);
        
        $sql_columns_table = "select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME= 'users' and table_schema = 'ap_21_3'"; // Get all columns name of table
        $columns_table = $conn->query($sql_columns_table);

        if(isset($_GET["submit"])){
            if(trim($_GET["last_name"] != "")){
                $id = $_GET["id"];
                $sql_check = "select * from $dbbase.$table where id = $id";
                $result = $conn->query($sql_check);
                if($result->num_rows > 0){
                   echo "Create Failed";
                }
                else{
                    $last_name = $_GET["last_name"];
                    $first_name = $_GET["first_name"];
                    $address = $_GET["address"];
                    $city = $_GET["city"];
                    $sql_create_user = "insert into $dbbase.$table values('$id', '$last_name', '$first_name', '$address', '$city');";
                    $resultelse = $conn->query($sql_create_user);
                    if($resultelse) {
                        echo "<script type='text/javascript'>alert('Created users');</script>";
                        $url = $_SERVER["PHP_SELF"];
                        header("Location: $url");
                    }
                    else echo "<script type='text/javascript'>alert('Create Failed');</script>";
                }

            }
            else{
                $url = $_SERVER["PHP_SELF"];
                header("Location: $url");
                $message = "Khong de trong";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
        
    ?>
      
    <div class="form-sign-in d-flex justify-content-center align-items-center" id="form-sign-in">
        <a class="btn btn-out text-white" id = "close-form" onclick="closeFormSignIn()">X</a>
        <div class="container bg-white-opacity w-25 h-50 shadow">
            <form action="#" method="GET" class="flex-column align-items-center h-100 d-flex justify-content-center">
                <h2 class="pb-4 text-white">Sign in</h2>
                <input class="form-control mb-2 text-white bg-dark-opacity shadow" type="text" placeholder="ID" name = "id">
                <input class="form-control mb-2 text-white bg-dark-opacity shadow" type="text" placeholder="Last name" name = "last_name">
                <input class="form-control mb-2 text-white bg-dark-opacity shadow" type="text" placeholder="First name" name = "first_name">
                <input class="form-control mb-2 text-white bg-dark-opacity shadow" type="text" placeholder="Address" name = "address">
                <input class="form-control mb-4 text-white bg-dark-opacity shadow" type="text" placeholder="City" name = "city">
                <input class="btn btn-light w-50" type="submit" value="Submit" name="submit">
            </form>
        </div>
    </div>
    <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <?php
                    if($columns_table->num_rows > 0){
                        while($row = $columns_table->fetch_assoc()){?>
                            <th><?php echo ucfirst($row["COLUMN_NAME"]) ?></th>
                        <?php
                        }
                    }
                ?>
            </thead>
            <tbody>
                <?php
                    if($data_table->num_rows > 0){
                        while($row = $data_table->fetch_assoc()){?>
                            <tr>
                                <td><?php echo $row["id"] ?></td>
                                <td><?php echo $row["first_name"] ?></td>
                                <td><?php echo $row["last_name"] ?></td>
                                <td><?php echo $row["address"] ?></td>
                                <td><?php echo $row["city"] ?></td>
                            </tr>
                        <?php 
                        }
                    }
                ?>
            </tbody>
        </table>
        <a href="#" class="btn btn-outline-primary" id = "Sign-in-member" onclick="showFormSignIn()">Create user</a>
    </div>
    <script type="text/javascript" src="./form.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>