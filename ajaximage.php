<?php
include('db.php');

session_start();
$session_id='1'; //$session id
$path = "uploads/";


if(isset($_POST['data'])){
	$content=$_POST['data'];} else{                         
 $content='null';
}
 
 
if(isset($_SESSION['razd'])){
	if($_SESSION['razd']=='ЗАГРУЗИТЬ ФОТОГРАФИЮ'){$razd='ЧЕРНОВИК';}else{
$razd=$_SESSION['razd'];}
}else{
$razd='null';}

if(isset($_SESSION['type'])){
$type=$_SESSION['type'];}else{   
$type='null';}

if(isset($_SESSION['chernovik'])){
$chernovik=$_SESSION['chernovik'];}else{   
$chernovik='null';}


if(isset($_SESSION['nomer'])){
$nomer=$_SESSION['nomer'];} else{
$nomer='0' ;
}


$sel="SELECT MAX(id) FROM inside";
$my_qu = mysql_query($sel);
$row = mysql_fetch_row($my_qu);
$rov = $row[0];
$name_id=$rov+1;


function getExtension($str) 
{

         $i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }

	$valid_formats = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					 $ext = getExtension($name);
					if(in_array($ext,$valid_formats))
					{
					//if($size<(1024*1024))
					//	{	
					$dat=date("Y-m-d");

							$actual_image_name = $name_id.".jpg";
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{								
									echo "<img src='uploads/".$actual_image_name."'  class='preview'>";
									$ins="insert into inside SET 
									nomer='$nomer',
									content='$content',
									type='$type',
									data='$dat',
									razdel='$razd',
									chernovik='$chernovik'";
									$my_q = mysql_query($ins);
									echo '<br><b style="color:red;">ОТПРАВЛЕНО</b>';

							//	}
						//	else
						//		echo "Fail upload folder with read access.";
						}
						//else
						//echo "Image file size max 1 MB";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}
?>