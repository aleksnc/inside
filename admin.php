<?php 
SESSION_START();
include('db.php');

?>	

<head>	
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script src="js/jquery.anythingslider.js" type="text/javascript"></script>   
	<script src="js/jquery.fittext.js" type="text/javascript"></script>   
	<link rel="stylesheet" href="css/website.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="js/jquery.tinyscrollbar.min.js"></script>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

	<style>
	body{
	background: white;
	
	}
#sel{
position: absolute; 
//border: 1px solid;
width: 170px; 
height: 800px; 
}

#rewave{
position: absolute; 
top:10px;
left: 200px;
width: 700px; 
 
}

#spisok li{
text-align: center;
	float:left;
	margin:0 0 10px 10px;
	position:relative;
	display:block;
	width:178px;
	height:245px;
	background:rgba(230,230,230,1);
}

#tovar{
margin:10px 0 0 0;
}

.img{
max-width:85%;
max-height:80%;
}

.img_a{
width:100px;
height:100px;
}

#imgnew {
top: 157px;
left: 12px;
position: absolute;
width:153px;
height:50px;
z-index:2;
}

#opisanie{
position: absolute;
top: 30px;
left: 380px;
border: 1px solid #3e3a3e;
width:490px;
height:562px;
padding: 3px;
} 

#win{
	position: fixed;
	top: 2%;
	left: 3%;
	width:900px;
	height:700px;
	border: 1px solid #3e3a3e;
	background:rgba(250,250,250,0.9);
	visibility: hidden;
	z-index:4;
}

#imgi{
max-width:320px;
max-height:640px;;
}

#formimg{
position: absolute;
top: 30px;
left: 30px;
max-width:320px;
max-height:640px;
border: 1px solid #3e3a3e;
padding: 3px;
}

#result{
margin: 0px 0px 0px 20px;
}

.albom {
position: absolute;
top: 10px;
left:200px;
width:100px;
height:100px;
}

#albomi{
margin: 0px 0px 35px 0;
}

#nazv{
position: absolute;
top: 10px;
left:320px;
height:70px;
}
	
.zaslon{
top:0px;
left:0px;
position: absolute; 
width: 420px;
height: 100px;
background:grey;
opacity: 0.2;
}
#form_id{
position: absolute;
top: 30px;
}
#winText{
	position: fixed;
	top: 2%;
	left: 3%;
	width:1000px;
	height:700px;
	border: 1px solid #3e3a3e;
	background:rgba(250,250,250,0.9);
	visibility: hidden;
	z-index:4;
}
#zakr{
z-index:3;
padding:7px 20px 0 0;
float: right;
color:red;
text-decoration:none;
font-family:Arial, Helvetica, sans-serif;
font-size:10pt;
}

#navigation{
position:absolute;
left:50px;
top: 30px;
}

#navigation a{
padding-left: 15px;
color:#c8c8c8;
text-transform:uppercase;
font-family:calibri, sans-serif;
font-size:14pt;
text-decoration:none;
}
#navigation a:hover{
color:#b98151;
}

#telo{
margin:0 auto;
position:relative;
width:900px;
height:800px;
}

#new_post{
position:relative;
height:390px;
}

#old_post{
position:relative;
height:390px;
top:10px
}

#verh{
margin:0 auto;
position:relative;
background: #000;
width:930px;
height:60px;
}


#autor{
width: 100%;
height: 106%;
top:-60px;
position:absolute;
background: gray;
opacity: 0.8;
z-index:1000;
}


#vvodim{
position:relative;
top:30%;
margin:0 auto;
z-index:1000;
height: 300px;
width: 300px;
border: solid 2px;
border-radius:  3px;
background: lightblue;
}

#vivod{
position:absolute;
top:230;
z-index:100;
color: rgb(82, 82, 82);
font-size:19px;
}

#nas{
position:absolute;
top:200;
z-index:100;
color: rgb(82, 82, 82);
font-size:19px;
}



#nas a{
color:rgb(82, 82, 82);
text-transform:uppercase;
font-family:calibri, sans-serif;
font-size:14pt;
text-decoration:none;
}
#nas a:hover{
color:#b98151;
}



</style>
<script>

function pas(){
//Получаем параметры
var log = $('#log').val();
var pass=$('#pass').val();
  // Отсылаем паметры
       $.ajax({
                type: "POST",
                url: "temp.php",
                data: "log="+log+"&pass="+pass,
                // Выводим то что вернул PHP
                success: function(html) {
 //предварительно очищаем нужный элемент страницы
                        $("#vivod").empty();
//и выводим ответ php скрипта
                        $("#vivod").append(html);
                }
        });

}

var message="";
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2) {
(message);
return false;}}}
if (document.layers) {
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS;
}else{
document.onmouseup=clickNS;
document.oncontextmenu=clickIE;
}
document.oncontextmenu=new Function("return false")

</script>
</head>
<body oncopy="return false">	
<div id='verh'>
<div id='navigation'>
<a href='chit.php'>ЧИТАТЬ</a>
<a href='loader.php'>ЗАГРУЗИТЬ</a>
<a href='editor.php'>ИЗМЕНИТЬ</a>
<a href='index.php'>НА САЙТ</a>

<a href='#' onclick='pas()'>выход</a>
</div>
</div>

<?php
$_SESSION['pass']='1';
if ($_SESSION['pass']!='1'){
	echo "<div id='autor'>
	<div id='vvodim'>
			<form method='post' action='' id='form_id'>
			
			<p>ЛОГИН:<br><input class='vv'  id='log' required type='text'></input></p>
			<p>ПАРОЛЬ:<br><input class='vv'  id='pass' required type='password'></input></p>
			
			<input type='button' onclick='pas()' value='Отправить' />
			</form>
		<div id='nas'>	
		<a href='index.php'>НА САЙТ</a>	
		</div>
		<div id='vivod'>ВВЕДИТЕ ЛОГИН И ПАРОЛЬ</div>
	</div>
	</div>";
	}

?>

</body>