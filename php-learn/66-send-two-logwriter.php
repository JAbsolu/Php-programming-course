<!DOCTYPE html>
<html lang="en">
   <head>
      <title>65-send-email-01.html</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="js/bootstrap.bundle.min.js"></script>
      <style>
      </style>
   </head>
   <body>
      <header class="p-5 bg-success text-white text-center">
         <h1>66-send-two-logwriter.php</h1>
         <h3><small class="text-light">Simple Send eMail Form</small></h3>
      </header>
      <main class="container-fluid">
         <div class="row mt-4">
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
                   // mail($to1,$subject1,$message1,$headers1); 
                   // -------------------------------------------- eMail #2: Sends an eamil to SENDER.
                   // mail($to2,$subject2,$message2,$headers2); 
                   
               
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

                   // ---------- start log writer
                    $timeStamp  = date("Y-m-d H:i:s");
                    $fileName   = "66-email-log.txt";
                    $d          = "\t";
                    $newLine    = "\r\n";
                    // $newRecord  = $timeStamp . $d . " Hello World" . $newLine;

                    $newRecord = $timeStamp.$d.$first_name.$d.$last_name.$d.$company_name.$d.$email.$d.$formMessage. $newLine;

                    echo $newRecord;

                    $thisFile = fopen ($fileName , 'a') or die ('Cannot open file');
                    fputs($thisFile,$newRecord);
                    fclose($thisFIle);
                    echo "<br><br>$filename is updated!";

?>
               
               } else { // 'Submit' NOT pressed
                   // echo '<h2>You must run this from a form action="65-contact-me-form.php"</h2> ';
                   // echo 'You would personalize some sort of error message to your user.';
               
               ?>
            <h1>Fill out the form</h1>
            <form method="post" action="66-send-two-logwriter.php">
               <!-- First Name input -->
               <div class="form-outline mb-4">
                  <label class="form-label" for="firstName">First Name</label>
                  <input type="text" id="firstName" name="firstName" class="form-control" />
               </div>
               <!-- Last Name input -->
               <div class="form-outline mb-4">
                  <label class="form-label" for="lastName">Last Name</label>
                  <input type="text" id="lastName" name="lastName" class="form-control" />
               </div>
               <!-- Company Name input -->
               <div class="form-outline mb-4">
                  <label class="form-label" for="companyName">Company Name</label>
                  <input type="text" id="companyName" name="CompanyName" class="form-control" />
               </div>
               <!-- Email input -->
               <div class="form-outline mb-4">
                  <label class="form-label" for="email">Email address</label>
                  <input type="email" id="email" name="email" class="form-control" />
               </div>
               <!-- Message input -->
               <div class="form-outline mb-4">
                  <label class="form-label" for="message">Message</label>
                  <textarea class="form-control" id="message" name="message" rows="4"></textarea>
               </div>
               <hr>
               <!-- Submit button -->
               <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Send</button>
               <!-- Reset button -->
               <button type="reset" class="btn btn-info btn-block mb-4">Reset</button>
            </form>
            <?php
               }
               ?>
            <navfooter>
            <hr>
         </div>
         <!-- End row -->
      </main>
      <footer class="mt-5 p-4 bg-dark text-white text-center">
         <p>Footer goes here</p>
         <a href="65-contact-me-form.html">Back to form</a> | <a href="index.php">Home</a>
      </footer>
   </body>
</html>