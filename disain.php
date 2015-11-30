<?php include('head.php');?>
<head>
<title>ДИЗАЙН ИНТЕРЬЕРА</title>
<style>
#text a{
color: gray;
}
#text a:hover{
color:#b98151;
}
#menu ul ul{
display:block;
}



</style>
<script>

</script>

</head>
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
					<li  class="List1"><a style='color:#b98151;'  href='index.php'>ПОРТФОЛИО</a>
						<ul >
							<li ><a href='onas.php'>о нас</a></li>
							<li ><a href='eskizi.php'>эскизы</a></li>
							<li ><a style='color:#b98151;' href='disain.php'>дизайн интерьеров</a></li>
							<li ><a href='mebel.php'>производство мебели</a></li>
							<li ><a href='tippro.php'>коттеджи</a></li>
							<li ><a href='proekt.php'>проектирование</a></li>
						</ul>
					</li>
					<li id='heh' class="List1"><a  href='kontact.php'>КОНТАКТЫ</a></li>
				</ul>
			</div>	
		
	</div>
</div>
<div id='a_all'>
	<div id='all'>
			<div id="scrollbar1">
				<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
				<div class="viewport">
					<div class="overview">
						<div id='albom'>
							<div id='line'>
								<div id='type' style=' height:33.54%; '>
									<?php
$q ="SELECT * FROM inside where nomer='1' and type='albom'";
$rez = mysql_query($q);
$array = mysql_fetch_array($rez);
if(isset ($array['id'])){
$id=$array['id'];
$content=$array['content'];
if($array['type_alb']!='text'){
echo	"<a  href='albom1.php'>
<img id='im1' src='uploads/".$id.".jpg'></img>
</a>
<div id='ten'>
<a href='albom1.php'>".$content."</a>
</div>";
} else{
echo "<span>".$content."</span>";
}
}else{echo "<a  href='albom1.php'>
<img id='im1' src='uploads/0.jpg'></img>
</a>";}
?>

								</div>
								<div id='type' style='top:3%; height:63.4%; '>
									<?php
$q ="SELECT * FROM inside where nomer='2' and type='albom'";
$rez = mysql_query($q);
$array = mysql_fetch_array($rez);
if(isset ($array['id'])){
$id=$array['id'];
$content=$array['content'];
if($array['type_alb']!='text'){
echo	"<a  href='albom2.php'>
<img id='im2' src='uploads/".$id.".jpg'></img>
</a>
<div id='ten'>
<a href='albom2.php'>".$content."</a>
</div>";
} else{
echo "<span>".$content."</span>";
}
}else{echo "<a  href='albom2.php'><img id='im2' src='uploads/0.jpg'></img></a>";}
?>
								</div>
							</div>
							<div id='line'>
								<div id='type' style=' height:60.6%; '>
									<?php
$q ="SELECT * FROM inside where nomer='3' and type='albom'";
$rez = mysql_query($q);
$array = mysql_fetch_array($rez);
if(isset ($array['id'])){
$id=$array['id'];
$content=$array['content'];
if($array['type_alb']!='text'){
echo	"<a  href='albom3.php'>
<img id='im1' src='uploads/".$id.".jpg'></img>
</a>
<div id='ten'>
<a href='albom3.php'>".$content."</a>
</div>";
} else{
echo "<span>".$content."</span>";
}
}else{echo "<a  href='albom3.php'><img id='im1' src='uploads/0.jpg'></img></a>";}
?>
								</div>
								<div id='type' style='top:3%; height:35.8%;'>
									<?php
$q ="SELECT * FROM inside where nomer='4' and type='albom'";
$rez = mysql_query($q);
$array = mysql_fetch_array($rez);
if(isset ($array['id'])){
$id=$array['id'];
$content=$array['content'];
if($array['type_alb']!='text'){
echo	"<a  href='albom4.php'>
<img id='im2' src='uploads/".$id.".jpg'></img>
</a>
<div id='ten'>
<a href='albom4.php'>".$content."</a>
</div>";
} else{
echo "<span>".$content."</span>";
}
}else{echo "<a  href='albom4.php'>
<img id='im2' src='uploads/0.jpg'></img>
</a>";}
?>
								</div>
							</div>
							<div id='line'>
								<div id='type' style='height:43.3%; '>
									<?php
$q ="SELECT * FROM inside where nomer='5' and type='albom'";
$rez = mysql_query($q);
$array = mysql_fetch_array($rez);
if(isset ($array['id'])){
$id=$array['id'];
$content=$array['content'];
if($array['type_alb']!='text'){
echo	"<a  href='albom5.php'>
<img id='im1' src='uploads/".$id.".jpg'></img>
</a>
<div id='ten'>
<a href='albom5.php'>".$content."</a>
</div>";
} else{
echo "<span>".$content."</span>";
}
}else{echo "<a  href='albom5.php'>
<img id='im1' src='uploads/0.jpg'></img>
</a>";}
?>
								</div>
								<div id='type' style='top:3%; height:53.8%; '>
									<?php
$q ="SELECT * FROM inside where nomer='6' and type='albom'";
$rez = mysql_query($q);
$array = mysql_fetch_array($rez);
if(isset ($array['id'])){
$id=$array['id'];
$content=$array['content'];
if($array['type_alb']!='text'){
echo	"<a  href='albom6.php'>
<img id='im2' src='uploads/".$id.".jpg'></img>
</a>
<div id='ten'>
<a href='albom6.php'>".$content."</a>
</div>";
} else{
echo "<span>".$content."</span>";
}
}else{echo "<a  href='albom6.php'>
<img id='im2' src='uploads/0.jpg'></img>
</a>";}
?>
								</div>
							</div>
						</div>
						<div id='text'>
						<?php			
$q ="SELECT * FROM inside where nomer='7' and razdel='ДИЗАЙН ИНТЕРЬЕРА' ";
$rez = mysql_query($q);
$array = mysql_fetch_array($rez);
if(isset( $array['id'])){
$content=$array['content'];
echo "<p>".$content."</p>";
} 

				?>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
<?php include('niz.php');?>