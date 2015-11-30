<?php
 session_start();
unset($_SESSION['alb']);
unset($_SESSION['razd']);
unset($_SESSION['sod']);
unset($_SESSION['nomer']);
unset($_SESSION['chernovik']);


?>

<script type="text/javascript" src="scripts/ajax.js"></script>
<script type="text/javascript" src="scripts/jquery.wallform.js"></script>
<script type="text/javascript" >
$(document).ready(function() { 
		
            $('#photoimg').die('click').live('change', function()			{ 
			 
			    $("#preview").empty();
				$("#imageform").ajaxForm({target: '#preview', 
				     beforeSubmit:function(){ 
					
					console.log('v');
					$("#imageloadstatus").show();
					 $("#imageloadbutton").hide();
					 }, 
					success:function(){ 
					console.log('z');
					 $("#imageloadstatus").hide();
					 $("#imageloadbutton").show();
					}, 
					error:function(){ 
							console.log('d');
					 $("#imageloadstatus").hide();
					$("#imageloadbutton").show();
					} }).submit();
												
			});	
			
        }); 

function three(t){
var name=t.options[t.selectedIndex].value;
var type=t.options[t.selectedIndex].id;

       $.ajax({
                type: "POST",
                url: "three.php",
                 data: "name="+name+"&type="+type,
                // Выводим то что вернул PHP
                success: function(html) {
 //предварительно очищаем нужный элемент страницы
                        $("#three").empty();
					
//и выводим ответ php скрипта
                        $("#three").append(html);
                }
        });
$(type).val(1).trigger('change');
}



</script>
<style>
#vawe{
position: absolute; 
top: 20px;
left:450px;
width: 340px; 
height: 340px; 
}

.sela1, .sela2, .sela3, .sela4, .sela5, .sela6{
width: 100px; 
height: 100px;
background: gray; 
position: absolute; 
}

.sela2{
left:120px;
}

.sela3{
left:240px;
}

.sela4{
top:120px;
}

.sela5{
top:120px;
left:120px;
}

.sela6{
top:120px;
left:240px;
}

.sela7{
top:240px;
width: 340px; 
height: 100px;
background: gray; 
position: absolute; 
}

.sela8, .sela9{
width: 340px; 
height: 100px;
background: gray; 
position: absolute; 
}

.sela8{
top:0px;
}

.sela9{
top:120px;
}


</style>


<p>ИЗМЕНИТЬ РАЗДЕЛ</p>
<p>ВЫБРАТЬ РАЗДЕЛ <br>
	<select class='select' id='razd' onChange='three(this)' >
		<option id='razd'>НЕ ВЫБРАН</option>
		<option id='razd'>ЗАГРУЗИТЬ ФОТОГРАФИЮ<br></option>
		<option id='razd'>О НАС<br></option>
		<option id='razd'>ЭСКИЗЫ<br></option>
		<option id='razd'>ДИЗАЙН ИНТЕРЬЕРА<br></option>
		<option id='razd'>ТИПОВЫЕ ПРОЕКТЫ<br></option>
		<option id='razd'>ПРОЕКТЫ<br></option>
		<option id='razd'>МЕБЕЛЬ<br></option>
	</select>
</p>
<div id='three'>
</div>



<!-- <div id='vawe'>

<p>ВЫБРАТЬ ВИД<br>

<select class="select" id="nomer" onChange="three(this)" >
		<option id="nomer">НЕ ВЫБРАН</option>
		<option id="nomer">АЛЬБОМ</option>
		<option id="nomer">ТЕКСТ<br></option>
	</select>
</p>




<p>ДОБАВИТЬ ИЗОБРАЖЕНИЕ</p>

<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
<div id='imageloadstatus' style='display:none'><img src="loader.gif" alt="Uploading...."/></div>
<div id='imageloadbutton'>
<input type="file" name="photoimg" id="photoimg".>
</div>
</form>
<div id='preview'>
</div>


<p>ВЫБРАТЬ АЛЬБОМ<br>

<select class="select" id="nomer" onChange="three(this)" >
		<option id="nomer">НЕ ВЫБРАН</option>
		<option id="nomer">1</option>
		<option id="nomer">2<br></option>
		<option id="nomer">3<br></option>
		<option id="nomer">4<br></option>
		<option id="nomer">5<br></option>
		<option id="nomer">7<br></option>
	</select>
</p>

<form action="" id="myform">
<p>Описание:<br><textarea  required type="text" id="mydata" name="mydata" rows="10" cols="45" ></textarea></p>
<input type="button" onclick="send();" value="Отправить" />
</form>

</div>
--!>