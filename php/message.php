<?php
    extract($_REQUEST);
    $file=fopen("message-save.txt","a");

    fwrite($file,"Name :");
    fwrite($file, $name ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Subject :");
    fwrite($file, $subject ."\n");
    fwrite($file,"Message :");
    fwrite($file, $message ."\n");
    fclose($file);
    header("location: ../index.html");
 ?>
