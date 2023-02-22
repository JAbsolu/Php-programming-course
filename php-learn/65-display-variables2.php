<!-- NORMAL HTML CAN GO BELOW THIS LINE -->
<?php
    if (isset($_POST['submit'])) {    

        // Assigning the values from the form to this PHP script
        // PHP variable    = the FORM "name=" variable
        $first_name     = $_POST['firstName'];
        $last_name      = $_POST['lastName'];
        $company_name   = $_POST['CompanyName'];
        $email          = $_POST['email'];
        $formMessage    = $_POST['message'];

        // ---------------------------------------- This is output to the user
         echo "Hello $company_name";

        echo "<hr>";
        print "<blockquote>
        <p><b>$first_name  $last_name</b>, thank you for visiting our website.</p>";
        print "<p>We look forward to working with $company_name in the future.</p>";
        echo "<p>Within 48 hours we will contact you via your email:<b> $email</b> <br>
        about your message. <blockquote><i>$formMessage</i></blockquote></p>
        </blockquote>";
        echo "<hr>";
        // ------------------------------------------ End screen output 

    } else { // 'Submit' NOT pressed
        echo '<h2>You must run this from a form action="65-contact-me-form.php"</h2> ';
        echo 'You would personalize some sort of error message to your user.';
    }

?>
<navfooter>
    <hr>
<a href="65-contact-me-form.html">Back to form</a> | <a href="index.php">Home</a>
