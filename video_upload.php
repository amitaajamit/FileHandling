<?php
extract($_POST);
error_reporting(1);

$con=mysql_connect("localhost","root","");

mysql_select_db("mydetail",$con);



$target_dir = "/testupload/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if(!$upd ='')
{
	if(file_exists($target_file))
	{echo "Already Exists";
	header("Refresh:2; url=index_video.php");
	}
	else{
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "flv" && $imageFileType != "jpg" && $imageFileType != "3gp" && $imageFileType != "mpeg")
{
    echo "File Format Not Suppoted";
} 

else
{

$video_path=$_FILES['fileToUpload']['name'];

mysql_query("INSERT INTO `video`(`video_id`,`video_name`) VALUES('','$video_path')");

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);

echo "uploaded ";
header("Refresh:2; url=index_video.php");

}

}
}
//display all uploaded video

if($disp)

{

$query=mysql_query("SELECT * FROM `video` WHERE 1");

	while($all_video=mysql_fetch_array($query))

	{
?>
	 
	 <video width="300" height="200" controls>
	<source src="testupload/<?php echo $all_video['video_name']; ?>" type="video/mp4">
	</video> 
	
	<?php } }
?>
