<?php
    $myfile = fopen ('33-te3xtthought.txt', 'r') or die ("can not open file");
    while (!feof($myfile)) {
        $line = fgets($myfile, 5000);
        print "$line <br>"
    }

    fclose ($myfile);
?>