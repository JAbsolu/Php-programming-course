<!DOCTYPE html>
<html>
<head>
    <title>Table Example</title>
</head>
<body>
<table border=1 bgcolor=yellow>
    <?php 
        $AcmeCars = array ("Ford", "Dodge", "Checy", "Honda");
        $AcmeCard = array ("K234", "J987", "F982");
        for ($x=0; $x < count($AcmeCars); $x++) {
            print "<tr><td>$x</td><td>$AcmeCarId[$x]</td>";
            print "<td>$AcmeCars[$x]</td></tr>\n";
        }
    ?>
</table>
</body>
</html>