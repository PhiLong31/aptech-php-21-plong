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
        require('create_user.php');
        require('sign-in_user.php');
    ?>

    <div class="form-sign-in d-flex justify-content-center align-items-center" id="form-sign-in">
        <a class="btn btn-out text-white" id = "close-form" onclick="closeFormSignIn()">X</a>
        <div class="container bg-white-opacity w-25 h-75 shadow">
            <form action="#" method="GET" class="flex-column align-items-center h-100 d-flex justify-content-center">
                <h2 class="pb-4 text-white">Create user</h2>
                <input class="form-control mb-2 text-white bg-dark-opacity shadow" type="text" placeholder="Last name" name = "last_name">
                <input class="form-control mb-2 text-white bg-dark-opacity shadow" type="text" placeholder="First name" name = "first_name">
                <input class="form-control mb-2 text-white bg-dark-opacity shadow" type="text" placeholder="Address" name = "address">
                <input class="form-control mb-2 text-white bg-dark-opacity shadow" type="text" placeholder="City" name = "city">
                <input class="form-control mb-2 text-white bg-dark-opacity shadow" type="text" placeholder="User" name = "user">
                <input class="form-control mb-2 text-white bg-dark-opacity shadow" type="password" placeholder="Password" name = "pass">
                <select name="roles_id" class="form-control mb-4 text-white bg-dark-opacity shadow">
                    <?php   
                        $table = "roles";
                        $sql = "select * from $dbase.$table";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()){?>
                            <option value = "<?php echo $row["roles_id"] ?>"><?php echo $row["name"] ?></option>
                            <?php
                        }
                    ?>
                </select>
                <input class="btn btn-light w-50" type="submit" value="Create" name="create">
            </form>
        </div>
    </div>
    <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <?php
                    // Create column by database
                    if($columns_table->num_rows > 0){
                        while($row = $columns_table->fetch_assoc()){?>
                            <th><?php echo str_replace("_", " ", ucfirst($row["COLUMN_NAME"])) ?></th>
                        <?php
                        }
                    }
                ?>
            </thead>
            <tbody>
                <?php
                    // Input data to table
                    if($data_table->num_rows > 0){
                        while($row = $data_table->fetch_assoc()){?>
                            <tr>
                                <td><?php echo $row["id"] ?></td>
                                <td><?php echo $row["first_name"] ?></td>
                                <td><?php echo $row["last_name"] ?></td>
                                <td><?php echo $row["address"] ?></td>
                                <td><?php echo $row["city"] ?></td>
                                <td><?php echo $row["user"] ?></td>
                                <td><?php echo $row["pass"] ?></td>
                                <td><?php 
                                    $sql = "select name from ap_21_3.users inner join ap_21_3.roles on ap_21_3.users.roles_id = ap_21_3.roles.roles_id where id = " . $row["id"];
                                    $result = $conn->query($sql);
                                    if($result->num_rows>0){
                                        echo $result->fetch_assoc()["name"];
                                    }
                                ?></td>
                            </tr>
                        <?php 
                        }
                    }
                ?>
            </tbody>
        </table>
        <a href="#" class="btn btn-outline-primary" id = "Sign-in-member" onclick="showFormSignIn()">Create user</a>
    </div>
    <script type="text/javascript" src="./form_sign-in.js"></script>
    <script type="text/javascript" src="./form_create.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>