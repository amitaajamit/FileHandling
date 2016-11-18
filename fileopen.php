<!DOCTYPE html>
<html>
<body>

<?php
$myfile  = fopen("new.txt" ,"r") or die("Unable to open file");
echo fgetc($myfile);// reads a single chracter from the file
fclose($myfile);
?>
</body>
</html>