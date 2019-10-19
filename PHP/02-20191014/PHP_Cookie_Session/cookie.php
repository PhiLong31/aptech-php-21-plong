<?php
    setcookie("Name", "Nguyen Ma Phi Long", time() + 15);
    if($_COOKIE["Name"]){
        echo "Your name is : " . $_COOKIE["Name"];
    }
    setcookie("Name", "Nguyen Ma Phi Long", time() - 15);
?>