<html>
    <head>
        <title>Create a User Function</title>
        <?php 
            function myFunction($company) {
                print("<p>Welcome to $company </p>");
            }
        ?>
    </head>
    <body>
        <h3>Start</h3>
        <?php 
            $company = "Acme Auto";
            myFunction($company);
        ?>
        <h3>End</h3>
    </body>
</html>