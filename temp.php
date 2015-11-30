<?php
include('db.php');
SESSION_START();
$_SESSION['tempid']=$_POST['name'];
$id=$_POST['name'];

$q ="SELECT * FROM inside where id='$id'";
$rez = mysql_query($q);
$array = mysql_fetch_array($rez);
	 $content=$array['content'];
echo'<span>'.$content.'</span>';

if(isset($_POST['pismo'])){
$sql_add = "update post SET
			send='1'
			WHERE id='$id'";		
	mysql_query($sql_add); 

}
if(isset($_POST['log'])){
$log=md5($_POST['log']);
$pass=md5($_POST['pass']);
$q ="SELECT * FROM inside where nomer='9'";
$rez = mysql_query($q);
$array = mysql_fetch_array($rez);
	$content=$array['content'];
$razdel=$array['razdel'];
if($log==$razdel){
	if($pass==$content){
		$_SESSION['pass']='1'; 
		echo'ВОШЛИ!';
		echo "<script>
        setTimeout(function(){
            window.location.href = 'chit.php';}, 1000);         
            </script>";
	} 
	else { 
		echo'ЛОГИН ИЛИ ПАРОЛЬ ВВЕДЕНЫ НЕВЕРНО';
		$_SESSION['pass']='0';
		echo "<script>
        setTimeout(function(){
            window.location.href = 'admin.php';}, 1000);         
            </script>";
	}
} 
else { 
	echo'ЛОГИН ИЛИ ПАРОЛЬ ВВЕДЕНЫ НЕВЕРНО';
	$_SESSION['pass']='0';
	echo "<script>
        setTimeout(function(){
            window.location.href = 'admin.php';}, 1000);         
            </script>";
	}

}


?>