<?php
include('db.php');
/**
 * Обработчик формы
 */
//Если форма была отправленна, то выводим ее содержимое на экран

 if (isset($_POST["razdel"])) {
	 $imga=$_POST["imga"];
	 $razdel=$_POST["razdel"];
	 $nomer=$_POST["nomer"];
	 $content=$_POST["opisanie"];
	if ($_POST["type"]=='text'){$tip='text'; $type='albom';};
	if ($_POST["type"]=='neto'){$tip='neto'; $type='text';};
	if ($_POST["type"]=='albom'){$tip=$type='albom';};
	if ($_POST["type"]=='img'){$tip='neto'; $type='img';};
	if($razdel=='ЧЕРНОВИК'){$cher='1';}else{$cher='0';}
	if($_POST["razdel"]=='УДАЛИТЬ'){
		$sql_add="DELETE FROM inside where id='$imga'";
	}else{
		$sql_add = "update inside SET
			chernovik='$cher',
			type='$type',
			type_alb='$tip',
			nomer='$nomer',
			razdel='$razdel',
			content='$content' 
			WHERE id='$imga'";		
	}
	mysql_query($sql_add); 
		echo '<b style="color:red;">СОХРАНЕНО</b>';
} else{echo '<b style="color:red;">НЕ ОТПРАВЛЕНО </b>' ;}
?>