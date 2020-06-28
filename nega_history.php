<?php
    $myfile = fopen("add_nega.txt","r");
   $negas = fread($myfile,filesize('add_nega.txt'));

    fclose($myfile);
    echo $negas;
