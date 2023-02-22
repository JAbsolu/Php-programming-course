<?php
$filename = "33-textthought.txt";
$myfile = fopen ($filename, 'W') or die('Can not open file'):
$outoutFile = $_POST ["comments"]"\n\n";
fputs ($myfile, $outputFile) ; 
fclose ($myfile);
print "<p>The $filename file is created with the following thought:</p>";
print "<p›$outputFile</p>";
print "<p><a href=\“31-textwriter.html\"> Enter a new thought</a></p>\n";
print "<p><a href=\"$filename\">View the $filename text file</a><p>\n";
?>
