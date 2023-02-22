<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>08-learn-variables.php </title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <style>
        h1 {
            font-size: 2.7rem;
        }

        h2 {
            font-size: 2rem;
            font-weight: 300;
        }
    </style>    
</head>
<body>
<main>
    <?php 
    // --------- variable configuration

    $pageName    =  ucwords(str_replace("-"," ",substr(substr(basename($_SERVER['PHP_SELF']),3),0,-4)));
    $fullName    = 'Johnson Absolu';
    $street      = 'Lexington Avenue';
    $city        = 'Bridgeport';
    $zip         = 06604;
    $currentYear = 2023;
    $floatedNum  = 34.84;

    $myArray = array('Name', 'Email', 'Phone number');

    // ---------- end of configuration

    print "<h1>$pageName<h1/>";
    print "<h2>The raray items are, $myArray[0], $myArray[1], $myArray[2]</h2>";
    print "<h2>The address is $street, $city, $zip</h2>";
    print "<h2>My name is $fullName </h2>";








    ?>
</main>
</body>
</html>