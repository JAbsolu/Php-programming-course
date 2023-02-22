<?php 
    $AcmeCars = array("Ford", "Dodge", "Chevy");
    $ct = 0;
    print "<p>Te text rray contains:</p>";
    forEach ($AcmeCars as $thisCar) {
        print "$ct -- $thisCar<br>\n";
        $ct++;
    }
?>