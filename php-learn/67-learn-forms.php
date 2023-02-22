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
         <h1>67-learn-forms.php</h1>
         <h3><small class="text-light">Murach Chapter 7</small></h3>
      </header>
      <main class="container-fluid">
         <div class="row mt-4">
            <!-- ALL NORMAL HTML GOES ABOVE THIS LINE -->
            <?php
               if (isset($_POST['submit'])) {            // 'Submit' button is pressed
                
               // --------------------------------- Assigns values from the form to this PHP script
               //  PHP variable    = the FORM "name=" variable

               // $user_name = filter_input(INPUT_POST, 'user_name');
               $user_name = $_POST['user_name'];
               $password  = filter_input(INPUT_POST, 'password');
               $action    = filter_input(INPUT_POST, 'action');

               $card_type = filter_input(INPUT_POST, 'card_type');
               if ($card_type === NULL) { 
                $card_type = 'Not provided'; 
               }
       
                $pepperoni = isset($_POST['pep']);
                $mushrooms = isset($_POST['msh']);
                $olives = isset($_POST['olv']);

                $card_type_drop = filter_input(INPUT_POST, 'card_type_drop');


               // --------------------------------- Output here
               echo "<h2>Results</h2>";  
               echo "UserName -> $user_name<br>";
               echo "Password -> $password<br>";
               echo "action -> $action<br>"; 
               echo "Card Type -> $card_type<br>";  
               echo "<hr>";
               echo "Pepperoni -> $pepperoni<br>";
               echo "Mushrooms -> $mushrooms<br>";
               echo "Olives ----> $olives<br>";

               if ($olives) {echo "<h2>I LOVE Olives!</h2>";
               } else {echo "<h3>I hate olives!</h3>";}
               echo "<hr>";

               // refer to page 66 in the book for filter_input()
               $toppings = filter_input(INPUT_POST, 'top', FILTER_SANITIZE_SPECIAL_CHARS,FILTER_REQUIRE_ARRAY);
                if ($toppings !== NULL) {
                    foreach($toppings as $key => $value) {
                        echo $key. ' = ' . $value . '<br>';
                    }
                } else {
                    echo 'No toppings selected.';
                }
                echo "<hr>";

                echo "Card-Type-Drop --> $card_type_drop<br>";

                echo "<hr><h3>newTop</h3>";
    $toppings = filter_input(INPUT_POST, 'newTop', 
            FILTER_SANITIZE_SPECIAL_CHARS,
            FILTER_REQUIRE_ARRAY);
    if ($toppings !== NULL) {
        foreach ($toppings as $key => $value) {
            echo $key. ' = ' . $value . '<br>'; // 0 = pep, 1 = msh
        }
    } else {
        echo 'No toppings selected.';
    }
echo "<hr><h3>Comment Output</h3>";
$comment = filter_input(INPUT_POST, 'comment');
echo $comment;

   
                
                echo "<hr><h3>Comment2 Output  Special characters</h3>";
$comment2 = $_POST['comment2'];
$comment2 = htmlspecialchars($comment2);
echo $comment2;
$comment3 = nl2br($comment2);
echo "<hr>With new line breaks - <br><br>";
echo $comment3;





        

               } else {                                  
               ?>
            <h1>Please fill out my form!</h1>
            <form method="post" action="">
            p.  212-213<br>
            <input type="text"     id="user_name" name="user_name" value="rharris"><br>
            <input type="password" name="password"><br>
            <input type="hidden"   name="action" value="login"><br>
            <hr>
            p. 214-215<br>
            <input type="radio" name="card_type" value="visa" > Visa<br>
            <input type="radio" name="card_type" value="mastercard"> MasterCard<br>
            <input type="radio" name="card_type" value="discover"> Discover<br>
            <input type="radio" name="card_type" value="NA"> NA<br>
            <hr>
            p. 216 - 217<br>
            <input type="checkbox" name="pep" checked> Pepperoni<br>
            <input type="checkbox" name="msh"> Mushrooms<br>
            <input type="checkbox" name="olv"> Olives
            <hr>
            p. 218 - 219<br>
            <input type="checkbox" name="top[]" value="pep"> Pepperoni<br>
            <input type="checkbox" name="top[]" value="msh"> Mushrooms<br>
            <input type="checkbox" name="top[]" value="olv"> Olives<br>
            <input type="checkbox" name="top[]" value="pin"> Pineapple<br>
            <hr>
            p. 220 - 221<br>
            <select name="card_type_drop">
                <option value="NA" selected>Choose a card type</option>
                <option value="visa">Visa</option>
                <option value="mastercard">MasterCard</option>
                <option value="discover">Discover</option>
            </select>
            <hr>

            p. 224 - 225<br>
<textarea name="comment" rows="4" cols="50">
 Welcome to PHP and MySQL!
 </textarea>
<hr>
p. 226 - 227<br>
<textarea name="comment2" rows="4" cols="50">
 Welcome to PHP and MySQL! Try special characters
 </textarea>
<hr>







              
               <hr>
               <!-- Submit button -->
               <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Send</button>
               <!-- Reset button -->
               <button type="reset" class="btn btn-info btn-block mb-4">Reset</button>
            </form>
            <!-- End form -->
            <?php } ?>
            <!-- NORMAL HTML CAN GO BELOW THIS LINE -->
         </div>
         <!-- End row -->
      </main>
      <navfooter>
         <a href="">Back to form</a> | <a href="index.php">Home</a>
      </navfooter>
   </body>
</html>