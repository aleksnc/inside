<?php
  SESSION_START();


$edit_text='<form action="" id="myform">
<p>Описание:<br><textarea  required type="text" id="mydata" name="mydata" rows="10" cols="45" ></textarea></p>
<input type="button" onclick="send();" value="Отправить" />
</form>
<div id="preview">
</div>';



$addfoto='<p>ДОБАВИТЬ ИЗОБРАЖЕНИЕ</p>
<form id="imageform" method="post" enctype="multipart/form-data" action="ajaximage.php">
<div id="imageloadstatus" style="display:none"><img src="loader.gif" alt="Uploading...."/></div>
<div id="imageloadbutton">
<input type="file" name="photoimg" id="photoimg".>
</div>
</form>
<div id="preview">
</div>';



if(isset($_POST['type'])){
	$type=$_POST['type'];                         
	$ntype=$_POST['name'];	
}
if(isset($type)){  
	if($type=='razd'){
		if($ntype!='НЕ ВЫБРАН'){
			 $_SESSION['razd']=$ntype;
			 unset($_SESSION['nomer']);
		} 
		else{unset($_SESSION['razd']);}
	}
}

if(isset($_SESSION['razd'])){
	if( $_SESSION['razd']=='ЗАГРУЗИТЬ ФОТОГРАФИЮ'){
		echo $addfoto;
		$_SESSION['type']='img';
		$_SESSION['chernovik']='1';
	}else{
		echo $edit_text;
		$_SESSION['type']='text';
		$_SESSION['chernovik']='1';
	}
}


		
?>