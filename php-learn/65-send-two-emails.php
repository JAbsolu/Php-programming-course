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


        $to1 = "Johnson.absolu@outlook.com";      // PUT YOUR EMAIL ADDRESS HERE AND UNCOMMENT
        $to2 = $_POST['email'];                  // This is the sender's Email address


        // Assign variables for eMail #1
        $subject1 = "My Website form submission #63";
        $message1 = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $formMessage;
        $message1 = $message1 . "\n\n ";
        $headers1 = "From:" . $to2;

        // -------------------------------------------- eMail #1: Sends an email to YOU.
        mail($to1,$subject1,$message1,$headers1); 
        // -------------------------------------------- eMail #2: Sends an eamil to SENDER.
        mail($to2,$subject2,$message2,$headers2); 
        

        // ---------------------------------------- This is output to the user
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
