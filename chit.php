<?php 
include('admin.php');
?>

<head>
 <title>ПОЧТА</title>
<script>

$(document).ready(function(){
			$('#scrollbar1').tinyscrollbar();	
			$('#scrollbar2').tinyscrollbar();	
		});	


function text(e){
document.getElementById('winText').style.visibility='visible';
e = e || event;
var target = e.target || e.srcElement;
var   id =target.id;
var idN='#'+id+'n';
var idP='#'+id+'p';
var idS='#'+id+'s';
var idT='#'+id+'t';

var src = target.src;
var ten=$(idN).val();
var tep=$(idP).val();
var tes=$(idS).val();
var tet=$(idT).val();

	$('#img').val(id);
	$('#name').val(ten);
	$('#pochta').val(tep);
	$('#opis').val(tes);
	$('#tel').val(tet);
	$.ajax({
                type: "POST",
                url: "temp.php",
                 data: "name="+id+"&pismo="+tep,
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

</script>
</head>
<body>

<div id='telo'>
<div id='new_post'>

<?php
$sel ="SELECT COUNT(id) FROM post where send='0'";
$my_qu = mysql_query($sel);
$row = mysql_fetch_row($my_qu);
$rov = $row[0];
echo 'НОВЫХ ПИСЕМ [ '.$rov.' ]';
?>
<div id="scrollbar1">
				<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
				<div class="viewport">
					<div class="overview">
<?
$q ="SELECT * FROM post where send='0'";
			$rez = mysql_query($q);
			for($im=0;$im<$rov;$im++){
				$array = mysql_fetch_array($rez);
				 $id=$array['id'];
				  $name=$array['name'];
				  $pochta=$array['pochta'];
				  $tel=$array['tel'];
				  $opisanie=$array['opisanie'];
				echo '
				<div style="position: relative; border: 1px solid red; width: 400px; 
				height: 80px;  margin-top: 10px; padding: 10px;" >
				
				<textarea id='.$id.'n style="position: absolute; width: 400px;
				height: 30px; border:none; "  >'.$name.'</textarea><br>
				
				<textarea id='.$id.'p style="position: absolute; width: 400px; 
				height: 30px; border:none; "  >'.$pochta.'</textarea><br>
				
				<textarea id='.$id.'s style="position: absolute; width: 400px; 
				height: 20px; border:none; "  >'.$opisanie.'</textarea><br>
				
				<textarea id='.$id.'t style="position: absolute; width: 400px; 
				height: 20px; border:none; "  >'.$tel.'</textarea>
				
				<div id="'.$id.'"  onclick="text(event)" class="zaslon"></div>
				</div>
				';
			}


?>
</div>
</div>
</div>
</div>
<br>


<div id='old_post'>

<?php
$sel ="SELECT COUNT(id) FROM post where send='1'";
$my_qu = mysql_query($sel);
$row = mysql_fetch_row($my_qu);
$rov = $row[0];
echo 'ПРОЧИТАННЫХ ПИСЕМ [ '.$rov.' ]';
?>
<div id="scrollbar2">
				<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
				<div class="viewport">
					<div class="overview">
<?
$q ="SELECT * FROM post where send='1'";
			$rez = mysql_query($q);
			for($im=0;$im<$rov;$im++){
				$array = mysql_fetch_array($rez);
				 $id=$array['id'];
				  $name=$array['name'];
				  $pochta=$array['pochta'];
				  $tel=$array['tel'];
				  $opisanie=$array['opisanie'];
				echo '
				<div style="position: relative; border: 1px solid red; width: 400px; 
				height: 80px;  margin-top: 10px; padding: 10px;" >
				
				<textarea id='.$id.'n style="position: absolute; width: 400px;
				height: 30px; border:none; "  >'.$name.'</textarea><br>
				
				<textarea id='.$id.'p style="position: absolute; width: 400px; 
				height: 30px; border:none; "  >'.$pochta.'</textarea><br>
				
				<textarea id='.$id.'s style="position: absolute; width: 400px; 
				height: 20px; border:none; "  >'.$opisanie.'</textarea><br>
				
				<textarea id='.$id.'t style="position: absolute; width: 400px; 
				height: 20px; border:none; "  >'.$tel.'</textarea>
				
				<div id="'.$id.'"  onclick="text(event)" class="zaslon"></div>
				</div>
				';
			}


?>
</div>
</div>
</div>
</div>




<div id='winText'>
		<form method="post" action="" id="form_id">
		<p> <input id="img" required type="text" name="imga"  /></p>
		
		<p>ОТ КОГО:<br><textarea  id="name" required type="text"  rows="1" cols="20" ></textarea></p>
		<p>ПОЧТА:<br><textarea  id="pochta" required type="text"  rows="1" cols="20" ></textarea></p>
		<p>ПИСЬМО:<br><textarea  id="opis" required type="text"  rows="15" cols="120" ></textarea></p>
		<p>ТЕЛЕФОН:<br><textarea  id="tel" required type="text"  rows="1" cols="20" ></textarea></p>
		
		<a id='zakr' href='#' onclick='zakr()'>Закрыть</a>			
</div>
	
	</div>
	</body>