<?php include('head.php');?>
<head>
<title>О КОМПАНИИ</title>
<style>
#tex a{
color: gray;
padding-left:15px;
}

#tex a:hover{
color:#b98151;
}

</style>
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
				<li  class="List1"><a  style='color:#b98151;' href='kompany.php'>О КОМПАНИИ</a></li>
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
					<li id='heh' class="List1"><a  href='kontact.php'>КОНТАКТЫ</a></li>
				</ul>
			</div>	
	
	</div>
</div>
<div id='a_all'>
	<div id='all'>
		<div id='content'>
			<div id="scrollbar1">
			<div class="scrollbar">
				<div class="track">
					<div class="thumb">
						<div class="end">
						</div>
					</div>
				</div>			
			</div>
				<div class="viewport">
					<div class="overview">
						<div id='kompany1'>
					
								<img id='foto' src='images/foto2.png'></img>
						
							<div class='fittexta' id='tex'>
							<?php			
$q ="SELECT * FROM inside where razdel='КОМПАНИЯ 1' and chernovik='0' and type='text' ";
$rez = mysql_query($q);
$array = mysql_fetch_array($rez);
if(isset( $array['id'])){
	$content=$array['content'];
	echo $content;
} 
						?>
							</div>
					
							
							<img id='foto' src='images/foto1.png'></img>
							
							<div class='fittexta' id='tex'>
								<?php			
$q ="SELECT * FROM inside where razdel='КОМПАНИЯ 2' and chernovik='0' and type='text' ";
$rez = mysql_query($q);
$array = mysql_fetch_array($rez);
if(isset( $array['id'])){
	$content=$array['content'];
	echo $content;
} 

						?>
						</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>

<?php include('niz.php');?>