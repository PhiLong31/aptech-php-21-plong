<?php
    $file = fopen("file.txt", "r") or die ("Can't open file");
    echo fread($file, filesize("text.txt"));
    fclose($file);
?>