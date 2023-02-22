<html>
<head>
    <title>Append to Files</title>
</head>
<body>
    <h2>Add to Today's Thought</h2>
    <p><b>Today's Thought is ...</b></p>
    <?php
        $filename = "33-textthought.txt";
        $myfile = fopen ($filename, 'r') or die ("can not open file");
        while (!feof($myfile)) {
            $line = fgets($myfile, 4096);
            print "$linr <br>"
        }
        fclose($myfile)
    ?>
    <form action="36-textaappender.php" method="post">
        <textarea name="comments" cols="50" rows="3" wrap></textarea>
        <p><input type="Submit" name="Update Thought"></p>
    </form>
</body>
</html>