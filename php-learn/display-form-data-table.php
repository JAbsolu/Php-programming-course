This is a simple PHP script which displays all form names & values in a table.<hr>
<table>
<tr><td>KEY</td><td>VALUE</td></tr>

<?php
  foreach ($_POST as $key => $value) {
	  if(is_array($value)){
		  $value = implode(", ", $value);
	  }
	echo '<tr><td><b>' . $key . '</b></td><td>' . $value.'</td></tr>';
  }
?>

</table>