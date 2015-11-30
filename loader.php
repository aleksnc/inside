<?php
 session_start();
include('admin.php');
unset($_SESSION['alb']);
unset($_SESSION['razd']);
unset($_SESSION['sod']);
unset($_SESSION['chernovik']);


?>

<head>
 <title>ЗАГРУЖАЕМ ИНФУ</title>	
<script type="text/javascript" src="scripts/jquery.min.js"></script>
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

#three img {
max-height:300px;
max-width: 300px; 


}


#scrollbar1 .viewport  { 
	height: 110%; 
}

</style>
</head>
<body>

<div id='telo'>

<p>ИЗМЕНИТЬ РАЗДЕЛ</p>
<p>ВЫБРАТЬ РАЗДЕЛ <br>
	<select class='select' id='razd' onChange='three(this)' >
		<option id='razd'>НЕ ВЫБРАН</option>
		<option id='razd'>ЗАГРУЗИТЬ ФОТОГРАФИЮ<br></option>
		<option id='razd'>СОЗДАТЬ ТЕКСТ<br></option>
	</select>
</p>
<div id='three'>
</div>
</div>

</body>
