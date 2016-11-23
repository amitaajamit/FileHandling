<?php 
if(isset($_POST['upload']))
{
	$filename = $_FILES['resume'] ['name'];
	$filetype = $_FILES['resume'] ['type'];
	$filesize = $_FILES['resume'] ['size']/1024;
	$fileTempName = $_FILES['resume'] ['tmp_name'];

if($filetype == "application/msword"){
if($filesize <= 2000){


//new File Name

$random =rand(1111,9999);
$NewFilename = $random.$filename;

//File Upload Path

$uploadpath = "/uploads/".$NewFilename;

//Function For Upload file
if (move_uploaded_file($fileTempName,$uploadpath)){
	echo "Success<br>";
	echo "File Name:".$NewFilename."<br>";
	echo "File Size:".$filesize."kb"."<br>";
	echo "File Type:".$filetype."<br>";
}
}
else{
	echo "File Size Should be 9mb";
	}
}

else{
	echo "File Should be msword";
	
	}
}
?>