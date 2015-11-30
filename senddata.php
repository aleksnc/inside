<?php
session_start(); 

if(isset($_POST['data'])){
	$content=$_POST['data'];} 
else{                         
	$content='null';
}

if(isset($_SESSION['razd'])){
$razd=$_SESSION['razd'];}

if(isset($_SESSION['type'])){
$type=$_SESSION['type'];}

if(isset($_SESSION['chernovik'])){
$chernovik=$_SESSION['chernovik'];}


if(isset($_SESSION['nomer'])){
$nomer=$_SESSION['nomer'];} else{
$nomer='0' ;
}
include ('db.php');

$dat=date("Y-m-d");


$ins="insert into inside SET 
	nomer='$nomer',
	content='$content',
	type='$type',
	data='$dat',
	razdel='$razd',
	chernovik='$chernovik'";

$my_q = mysql_query($ins);
echo '<b style="color:red;">ОТПРАВЛЕНО</b>';
?>