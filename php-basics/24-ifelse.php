<?php 
    $GoodPassowrd = 'acme';
    if ($_POST["password"] == $GoodPassowrd) {
        print "<b>Acme Password verified!<b> \n";
    } else {
        print "<b>Acme Password incorrect!</b>\n";
    }
?>