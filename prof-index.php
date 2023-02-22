<!DOCTYPE html>
<html lang="en">

<!-- Set variables to use in this page -->
<?php 
  $myName        = "Prof. Paul Gruhn";
  $courseTitle   = "CSC*E269 Server-Side Programming";
  $schoolName    = "Housatonic Community College";
  $currentPage   = $_SERVER['SCRIPT_NAME'];
  $myId          = basename(getcwd());
  $headShot = "img/paul-gruhn.jpg";
  $copyRightLine = "&copy; 2023 - Prof. Paul Gruhn, East Windsor, CT 06088";
?>

<head>
  <title><?php echo $myName; ?> - <?php echo $currentPage; ?> </title>
  <meta charset="utf-8">

  <!-- The next 3 lines are needed for Bootstrap 5 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
  
  <!-- This is YOUR custom css file -->
  <link href="css/main-style.css" rel="stylesheet">

</head>

<body>
<div class="p-5 bg-primary text-white text-center">
	<div class="row">
		<div class="col-md-4">
			<img class="img-fluid rounded-circle" alt="My headshot" src="<?php echo $headShot; ?>"> 
		</div>
		<div class="col-md-8">
			<h1><?php echo $courseTitle ?></h1>
			<h2><?php echo $schoolName ?></h2>
			<h2><?php echo $myId . ' - ' . $myName; ?></h2>
		</div>
	</div>
</div>

<div class="container mt-5">
<ul class="list-group flex-column">

<?php
$students = array(
'01 - John Absolu',
'02 - Dheylin Antigua',
'03 - Nada Bouyahiaoui',
'04 - Isaac Cadena Flores',
'05 - Anniel Clarke',
'06 - Keesha Evanson nee Reid',
'07 - Reynaldo Garcia',
'08 - Miguel Guzman-Melendez',
'09 - Shawn McManus',
'10 - James Morantus',
'11 - Sean Reynolds',
'12 - Roseanne Rojas',
'13 - Joshua Romans',
'14 - Emmanuel Torres',
'15 - Edson Venicio',
'16 - Jenna Yaylagul',
'20 - Prof. Gruhn - Demo Account'
);

foreach ($students as $thisStudent) {
  print "<a class='list-group-item list-group-item-action list-group-item-primary' href='https://csc269-" . substr($thisStudent,0,2) . ".hcc-computerscience.com' target='_blank'><b>$thisStudent</b></a>";
}

?>
</ul>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p><?php echo $copyRightLine ?></p>
</div>

</body>
</html>