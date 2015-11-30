<?php
include ('db.php');
	$name=$_POST['name']; 
	$name = strip_tags ($name);
	$opisanie=$_POST['opisanie'];
	$opisanie = strip_tags ($opisanie);
	$pochta=$_POST['pochta'];
	$pochta = strip_tags ($pochta);
	$tel=$_POST['tel'];
	$tel = strip_tags ($tel);		
if($name!=''){
	if($opisanie!=''){
		if($pochta!=''){
			if($tel==''){$tel='0';}	
			$dat=date("Y-m-d");
			$ins="insert into post SET 
				name='$name',
				opisanie='$opisanie',
				pochta='$pochta',
				tel='$tel',
				send='0',
				dat='$dat'";
			$my_q = mysql_query($ins);
			echo '<b style="color:red; padding:20px;">ОТПРАВЛЕНО</b>';
		}else{echo '<b style="color:red; padding:20px;">Введите почту<b><br>';}
	}else{echo '<b style="color:red; padding:20px;">Добавте текст<b><br>';}
}else{echo '<b style="color:red; padding:20px;">Введите имя<b><br>';}
?>