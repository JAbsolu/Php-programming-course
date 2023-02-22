<?php
    $user = "Donna";
    $pass = "acme";
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $user && $password == $pass) {
        print "$username, Welcome to Acme Auto.";
    } else {
        print "$username, is an invalid username. <br />";
        print "Click <a href=\"27-and.html\">here</a> to try again.";
    }
?>