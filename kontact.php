<?php include('head.php');?>

<head>
<title>КОНТАКТЫ</title>
<style>
#map{
position: absolute; 
max-height: 100%;
}
#kont{
top: 15px;
left: 69%;
width: 350px; 
float:right;
position: absolute;
text-align:right; 
font-family:calibri, sans-serif;
color:#c8c8c8;
font-size: 13pt;
}
#kont p{
margin:11px 0 0 0;
}

.txt{
width: 88.6%; 
background:#312F2F;
color:#c8c8c8;
border: none;
//border-color:#000;
}

.but{
text-decoration:none;
padding: 3px;
color:#c8c8c8;
background:#312F2F;
}

.but:hover{
padding: 3px;
color:#b98151;
background:#262525;
}

</style>
</head>
<script>
function post()
{
//Получаем параметры
var name = $('#name').val()
var opisanie = $('#opisanie').val()
var pochta = $('#pochta').val()
var tel = $('#tel').val()

  // Отсылаем паметры
       $.ajax({
                type: "POST",
                url: "post.php",
                data: "name="+name+"&opisanie="+opisanie+"&pochta="+pochta+"&tel="+tel,
                // Выводим то что вернул PHP
                success: function(html) {
 //предварительно очищаем нужный элемент страницы
                      $("#vivod").empty();
//и выводим ответ php скрипта
$('#vivod').css('visibility','visible');
                       $("#vivod").append(html);
					   
                }
        });

}

function zakr(){
$('#vivod').css('visibility','hidden');
	$("#vivod").empty();
}
</script>
<div id='a_head'>
	<div id='head'>
			<a href='index.php'><img  id='label'  src='images/logo.png'></img></a>

			<div id='contact'>
			<p class='fittet'><b>+7(812) 948 55 16&nbsp &nbsp +7(812) 948 55 06<br>
			in-side.d@mail.ru&nbsp &nbsp &nbsp in-side.a@mail.ru</b></p>
			</div>
			<div id='seti'>
			<a href='https://www.facebook.com/inside.ad'><img style='border:none;'src='images/f.png'></img></a>
			<a href='https://vk.com/inside_ad'><img style='border:none;' src='images/vk.png'></img></a>
			</div>
			<div id='menu'>		
				<ul id='nav'>
				<li  class="List1"><a  href='kompany.php'>О КОМПАНИИ</a></li>
					<li  class="List1"><a  href='index.php'>ПОРТФОЛИО</a>
						<ul >
							<li ><a href='onas.php'>о нас</a></li>
							<li ><a href='eskizi.php'>эскизы</a></li>
							<li ><a href='disain.php'>дизайн интерьеров</a></li>
							<li ><a href='mebel.php'>производство мебели</a></li>
							<li ><a href='tippro.php'>коттеджи</a></li>
							<li ><a href='proekt.php'>проектирование</a></li>
						</ul>
					</li>
					<li id='heh'  class="List1"><a  style='color:#b98151;' href='kontact.php'>КОНТАКТЫ</a></li>
				</ul>
			</div>	
		</div>	
	
</div>


<div id='a_all'>
	<div id='all'>

		<div id='content'>
		<a href='http://maps.yandex.ru/?um=yVoQWGT1TcS9TsU63KX1xteHf5OWKLrc&l=map'target="_blank">
		<img id='map' src='images/cone.jpg'></img></a>
			<div class='fittet' id='kont'>
	<p style='margin:0;'><b>OOO "ИнСайд"</b><br>
	<b>Никольская пл., 6,</b><br>
	<b>Санкт-Петербург, 190068, Россия</b><br>
	<b>+7 (812) 948 55 16&nbsp &nbsp &nbsp +7 (812) 948 55 06</b><br>
	<b>in-side.a@mail.ru&nbsp &nbsp &nbsp &nbsp &nbsp in-side.d@mail.ru</b></p>
	
	<p class='obsv'><b>ОБРАТНАЯ СВЯЗЬ</b></p>
	<p><b>Имя*</b><br>
	<input  type='text' class='txt' required id='name'/></p>
	<p><b>Чем мы вам можем помочь?*</b><br>
	<span style='font-size: 10.8pt;'>Опишите исходную ситуацию задачу или проблему.</span>
	<textarea  class='txt' required type="text" id="opisanie" rows="8"  ></textarea></p>
	<p><b>Электронная почта*</b>
	<input  class='txt' required type='text' id='pochta'/></p>
	
	<p><b>Телефон</b>
	<input  class='txt' required type='text' id='tel'/></p><br>
	<a  class='but' href="#"onclick='post()'>ОТПРАВИТЬ ЗАПРОС</b></a>
	<div onclick='zakr()' style=" visibility: hidden; position:absolute; left:10px; top: 0;border: solid 1px; border-color: red; background: white;"  id='vivod'></div></p><br>
			</div>	
		</div>
	</div>
</div>	



<?php include('niz.php');?>

