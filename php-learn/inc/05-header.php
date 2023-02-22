<?php
$pageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  // get pagename
$pageName = substr($pageName, 0, strrpos($pageName, "."));   // strip extension
$pageName = str_replace('-', ' ', $pageName);  // replaces the dashes with spaces
$pageName = substr($pageName,3);  // strip the first 3 characters form the string
$pageName = ucwords($pageName);   // Upper case each Word
?>
<header class="p-5 text-white text-center">
    <h1><?php echo $pageName; ?></h1>
</header>