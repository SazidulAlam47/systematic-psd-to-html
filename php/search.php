<?php
    extract($_REQUEST);
    $file=fopen("search-save.txt","a");

    fwrite($file,"Search :");
    fwrite($file, $search ."\n\n");
    fclose($file);
    header("location: ../index.html");
 ?>
