
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>00-template-boot-form.html</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="js/bootstrap.bundle.min.js"></script>
      <link href="css/64-my-style.css" rel="stylesheet">
      <style>
         .fakeimg {height: 200px;background: #aaa;}
      </style>
   </head>
   <body>

      <?php include("inc/64-nav.php"); ?>
      <?php include("inc/64-header.php"); ?>


      <main class="container-fluid">
         <div class="row mt-4">
            <form method="post" action="display-form-data.php">

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

               <!-- Password -->
               <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
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
               <!-- Radio Button -->
               <h3>Favorite Beatle</h3>
               <div class="form-check">
                <input class="form-check-input" type="radio" name="favBeatle" value="Paul" id="Paul">
                <label class="form-check-label" for="Paul">Paul</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="favBeatle" value="John" id="John">
                <label class="form-check-label" for="John">John</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="favBeatle" value="George" id="George">
                <label class="form-check-label" for="George">George</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="favBeatle" value="Ringo" id="Ringo">
                <label class="form-check-label" for="Ringo">Ringo</label>
              </div>   
              
              <hr>
              <!-- Select Box -->
              <label class="form-select-label" for="FavFruit">Favorite Fruit</label>
              <select class="form-select" name="favFruit" >
                <option>Orange</option>
                <option>Pear</option>
                <option>Apple</option>
                <option>Blueberries</option>
              </select>
               
              <hr>
              <!-- Toggle Switch --> 
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                <label class="form-check-label" for="mySwitch">Dark Mode</label>
              </div>

<hr>
               <!-- Checkbox -->
               <div class="form-check d-flex mb-4">
                  <label class="form-check-label" for="sendCopy">
                  <input class="form-check-input me-2" type="checkbox" value="" id="sendCopy" name="sendCopy" checked />
                  Send me a copy of this message
                  </label>
               </div>

               <!-- Submit button -->
               <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
               <!-- Reset button -->
               <button type="reset" class="btn btn-info btn-block mb-4">Reset</button>
            </form>  <!-- End form -->
         </div>
         <!-- End row -->
      </main>

      <?php include("inc/64-footer.php"); ?>
   </body>
</html>

<!--
Here are some links to help you with Bootstrap 5 forms
Google: "Bootstrap 5 form templates"

https://getbootstrap.com/docs/5.0/forms/overview/
https://mdbootstrap.com/docs/standard/forms/overview/ 
https://blog.hubspot.com/website/bootstrap-form-template
https://colorlib.com/wp/bootstrap-form-templates/
-->