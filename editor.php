<?php
include('admin.php');
?>
<head>
 <title>РЕДАКТОР КОНТЕНТА</title>
<style>
#tovar{
max-width:178px;
}
.zaslon{
height: 52px;
}


</style>


<script>


$(document).ready(function(){
		$('#scrollbar1').tinyscrollbar();	
	});	
	
      function edit(t){
var name=t.options[t.selectedIndex].value;
var type=t.options[t.selectedIndex].id;

       $.ajax({
                type: "POST",
                url: "edit.php",
                 data: "name="+name+"&type="+type,
                success: function(html) {
                        $("#spisok").empty();
                        $("#spisok").append(html);
                }
        });

}

function pic(e){
document.getElementById('win').style.visibility='visible';
document.getElementById('winText').style.visibility='hidden';
e = e || event;
var target = e.target || e.srcElement;
var id = target.id;
var src = target.src;
	$('#imga').val(id);
	$('#imgi').attr({'src': src})
	$.ajax({
                type: "POST",
                url: "temp.php",
                 data: "name="+id,
                success: function(html) {
                        $("#oldtext").empty();
                        $("#oldtext").append(html);
                }
        });
	
}
function text(e){
document.getElementById('winText').style.visibility='visible';
document.getElementById('win').style.visibility='hidden';
e = e || event;
var target = e.target || e.srcElement;
var   id =target.id;
var idT='#'+id+'t';

var src = target.src;
var tet=$(idT).val();
	$('#img').val(id);
	$('#opis').val(tet);
	$.ajax({
                type: "POST",
                url: "temp.php",
                 data: "name="+id,
                success: function(html) {
                        $("#oldtext").empty();
                        $("#oldtext").append(html);
                }
        });
	
}




function zakr(){
$('#win').css('visibility','hidden');
$('#winText').css('visibility','hidden');
	$("#result_div_id").empty();
	$("#vivod").empty();

}

function AjaxFormRequest(result_id,form_id,url) { 
			jQuery.ajax({ 
				url:     url, //Адрес подгружаемой страницы 
				type:     "POST", //Тип запроса 
				dataType: "html", //Тип данных 
				data: jQuery("#"+form_id).serialize(),  
				success: function(response) { //Если все нормально 
				document.getElementById(result_id).innerHTML = response; 
			}, 
			error: function(response) { //Если ошибка 
			document.getElementById(result_id).innerHTML = "Ошибка при отправке формы"; 
			} 
		 }); 
	
		 
	}
function send(){
//Получаем параметры
var imga = $('#img').val();
var opis=$('#opis').val();
 var type=$('#type').val();
var nomer=$('#nomer').val();
var razdel=$('#razdel').val();
  // Отсылаем паметры
       $.ajax({
                type: "POST",
                url: "update_form.php",
                data: "imga="+imga+"&opisanie="+opis+"&type="+type+"&nomer="+nomer+"&razdel="+razdel,
                // Выводим то что вернул PHP
                success: function(html) {
 //предварительно очищаем нужный элемент страницы
                        $("#vivod").empty();
//и выводим ответ php скрипта
                        $("#vivod").append(html);
                }
        });

}


function mini(){

       $.ajax({
                type: "POST",
                url: "mini.php",
                data: "imga='1'",
                // Выводим то что вернул PHP
                success: function(html) {
 //предварительно очищаем нужный элемент страницы
                        $("#vi").empty();
//и выводим ответ php скрипта
                        $("#vi").append(html);
                }
        });

}

</script>
</head>
<body>

<div id='telo'>

<div id='sel'>
<p>ФОТОГРАФИИ</p>
<p>ВЫБРАТЬ РАЗДЕЛ <br>
	<select class='select' id='razd' onChange='edit(this)' >
		<option id='razd'>НЕ ВЫБРАН</option>
		<option id='razd'>ЧЕРНОВИК<br></option>
		<option id='razd'>ГЛАВНАЯ<br></option>
		<option id='razd'>КОМПАНИЯ<br></option>
		<option id='razd'>О НАС<br></option>
		<option id='razd'>ЭСКИЗЫ<br></option>
		<option id='razd'>ДИЗАЙН ИНТЕРЬЕРА<br></option>
		<option id='razd'>КОТТЕДЖИ<br></option>
		<option id='razd'>ПРОЕКТЫ<br></option>
		<option id='razd'>МЕБЕЛЬ<br></option>
	</select>
</p>


<p>ТЕКСТЫ</p>
<p>ВЫБРАТЬ РАЗДЕЛ <br>
	<select class='select' id='r_text' onChange='edit(this)' >
		<option id='r_text'>НЕ ВЫБРАН</option>
		<option id='r_text'>ЧЕРНОВИК<br></option>
		<option id='r_text'>ГЛАВНАЯ<br></option>
		<option id='r_text'>КОМПАНИЯ 1<br></option>
		<option id='r_text'>КОМПАНИЯ 2<br></option>
		<option id='r_text'>О НАС<br></option>
		<option id='r_text'>ЭСКИЗЫ<br></option>
		<option id='r_text'>ДИЗАЙН ИНТЕРЬЕРА<br></option>
		<option id='r_text'>КОТТЕДЖИ<br></option>
		<option id='r_text'>ПРОЕКТЫ<br></option>
		<option id='r_text'>МЕБЕЛЬ<br></option>
	</select>
</p>

<a href='#' onclick='mini()'>Создать миниатюры</a>
<div id='vi'>
</div>
</div>

<div id='rewave'>
	<ul id='spisok'>
	
	</ul>
</div>
	
<div id='win'>
		<div id='formimg'>
			<img id='imgi'  />
		</div>
		<div id='opisanie'>
		<form method="post" action="" id="form_id">
		<p>ИЗО: <input id="imga" required type="text" name="imga"  /></p>
				<p>Выберите тип: <select  required  name="type">
			<option>Не выбран</option>
			<option value='albom'>АЛЬБОМ<br></option>
			<option value='img'>ФОТОГРАФИЯ<br></option>
		</select></p>
		<p>Номер альбома: <select  required  name="nomer">
			<option>Не выбран</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
		</select></p>
		<p>ВЫБРАТЬ РАЗДЕЛ <br>
			<select required  name="razdel" >
			<option >НЕ ВЫБРАН</option>
			<option >УДАЛИТЬ<br></option>
			<option >ЧЕРНОВИК<br></option>
			<option >ГЛАВНАЯ<br></option>
			<option >КОМПАНИЯ<br></option>
			<option >О НАС<br></option>
			<option >ЭСКИЗЫ<br></option>
			<option >ДИЗАЙН ИНТЕРЬЕРА<br></option>
			<option >КОТТЕДЖИ<br></option>
			<option >ПРОЕКТЫ<br></option>
			<option >МЕБЕЛЬ<br></option>
			</select>
		</p>
		<p>Описание:<br><textarea  required type="text" name="opisanie" rows="10" cols="40" ></textarea></p>
		<input type="button" value="Отправить" onclick="AjaxFormRequest('result_div_id', 'form_id', 'update_form.php')" />
		
		
		</form>
		 <a id='zakr' href='#' onclick='zakr()'>Закрыть</a>
		</div>
		<div style="position: relative; border: 1px solid red; width: 180px; 
		height: 20px; left:620px; top:80px; padding: 10px;" id="result_div_id"></div>
		
		<div id='oldtext' style="position: absolute; left:390px; top:490px;  padding: 10px;">
		</div>
</div>

<div id='winText'>
		<form method="post" action="" id="form_id">
		<p> <input id="img" required type="text" name="imga"  /></p>
		
		<p>Описание:<br><textarea  id="opis" required type="text" name="opisanie" rows="20" cols="120" ></textarea></p>
				<p>Выберите тип: <select  required  id="type">
			<option>Не выбран</option>
			<option value='text'>АЛЬБОМ<br></option>
			<option value='neto'>ПРОСТО ТЕКСТ<br></option>
		</select> 
		Номер альбома: 
		<select  required  id="nomer">
			<option>Не выбран</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
		</select> 
		ВЫБРАТЬ РАЗДЕЛ 
		<select required  id="razdel" >
			<option >НЕ ВЫБРАН</option>
			<option >УДАЛИТЬ<br></option>
			<option >ЧЕРНОВИК<br></option>
			<option >ГЛАВНАЯ<br></option>
			<option >КОМПАНИЯ 1<br></option>
			<option >КОМПАНИЯ 2<br></option>
			<option >О НАС<br></option>
			<option >ЭСКИЗЫ<br></option>
			<option >ДИЗАЙН ИНТЕРЬЕРА<br></option>
			<option >КОТТЕДЖИ<br></option>
			<option >ПРОЕКТЫ<br></option>
			<option >МЕБЕЛЬ<br></option>
			</select>
		</p>
		
		<input type="button" onclick="send()" value="Отправить" />
		</form>
		 <a id='zakr' href='#' onclick='zakr()'>Закрыть</a>
		
		<div style="position: relative; border: 1px solid red; width: 180px; 
		height: 20px; left:620px; top:10px; padding: 10px;" id="vivod"></div>
		
</div>
</div>
</body>
	