<?php  
$newfile =touch("mydata.pdf")




?>

<!Doctype html>
<htm lang:"eng">
<head>
<meta charset="utf-8">
<title>Create File</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
</head>
<body>
<?php 
echo "New file is created".$newfile;
echo "<br>";
echo "file name is";
//echo "mydta is deleted".unlink("data.pdf");

if(file_exists("mydata.pdf") && filesize("mydata.pdf")>0){
echo "File Alraedy Exists";
copy("mydata.pdf","C:/xampp/mynewdata.pdf");
}
else{
	echo "New File Created".touch("new.txt");
	}
?>
</body>
</html>