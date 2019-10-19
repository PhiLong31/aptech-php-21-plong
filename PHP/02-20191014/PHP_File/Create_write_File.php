<?php
    //Ex 1:
    $file = fopen("long.txt" , "w") or die("Can't open file");
    fwrite($file, "Nguyen Ma Phi Long");
    fclose($file);
    $file = fopen("long.txt", "r") or die("Can't open file");
    while(!feof($file)){
        echo fgets($file) . "<br>";
    }
    fclose($file);

    //Ex 2: 
    $file = fopen("file.txt", "a+") or die("Can't open the file");
    fwrite($file, "\nGame Website");
    fclose($file);

    $file = fopen("long.txt", "a+") or die("Can't open the file");
    fread($file, filesize("long.txt"));
    fclose($file);
?>