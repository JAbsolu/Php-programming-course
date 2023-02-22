<?php
    $user1 = "Paul";
    $user2 = "Donna";
    $username = $_POST["username"];

    if ($username == $user1 || $username == $user2) {
        print "$username, welcone to ACME Auto.";
    } eolse {
        print "$username, is an invalid username. <br />"
        print "Click <a href=\"25-or.html\">here</a> to try again.";
    }
?>