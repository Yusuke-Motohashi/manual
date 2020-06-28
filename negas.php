<?php
 include '_header.php';

?>

<?php
    $myfile = fopen("negas.txt","r");
    echo nl2br(fread($myfile, filesize("negas.txt"))); 
    fclose($myfile);
