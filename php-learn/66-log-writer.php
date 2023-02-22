<?php 
$timeStamp  = date("Y-m-d H:i:s");
$fileName   = "66-email-log.txt";
$d          = "\t";
$newLine    = "\r\n";
$newRecord  = $timeStamp . $d . " Hello World" . $newLine;


echo $newRecord;

$thisFile = fopen ($fileName , 'a') or die ('Cannot open file');
fputs($thisFile,$newRecord);
fclose($thisFIle);
echo "<br><br>$filename is updated!";

?>