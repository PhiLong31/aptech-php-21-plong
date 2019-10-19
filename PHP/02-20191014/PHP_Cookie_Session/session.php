<?php
    session_start();
    $_SESSION["Name"] = "Nguyen Ma Phi Long";
    $_SESSION["Project"] = "Game Website";
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    session_destroy();
?>