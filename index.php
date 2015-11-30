<head>
<title>ПОРТФОЛИО</title>	
<?php include('head.php');
include('db.php');?>

<style>
#menu ul ul{
display:block;
}

</style>
</head>
<body>
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
			<span><div id='menu'>		
				<ul id='nav'>
				<li  class="List1"><a  href='kompany.php'>О КОМПАНИИ</a></li>
					<li  class="List1"><a style='color:#b98151;' href='index.php'>ПОРТФОЛИО</a>
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
			</div></span>
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
									<a  href='onas.php'>
										<img id='im1' src='images/onas.png'></img>
									</a>
									<div id='ten'>
										<a href='onas.php'>О НАС</a>
									</div>
								</div>
								<div id='type' style='top:3%; height:63.4%; '>
									<a  href='eskizi.php'>
										<img id='im2'src='images/eskizi.png'></img>
									</a>
									<div id='ten'>
										<a href='eskizi.php'>ЭСКИЗЫ</a>
									</div>
								</div>
							</div>
							<div id='line'>
								<div id='type' style=' height:60.6%; '>
									<a  href='disain.php'>
										<img id='im1' src='images/disain.png'></img>
									</a>
									<div id='ten'>
										<a href='disain.php'>ДИЗАЙН ИНТЕРЬЕРОВ</a>
									</div>
								</div>
								<div id='type' style='top:3%; height:35.8%;'>
									<a  href='mebel.php'>
										<img  id='im2'src='images/mebel.png'></img>
									</a>
									<div id='ten'>
										<a href='mebel.php'>ПРОИЗВОДСТВО МЕБЕЛИ</a>
									</div>
								</div>
							</div>
							<div id='line'>
								<div id='type' style='height:43.3%; '>
									<a  href='proekt.php'>
										<img id='im1' src='images/tipr.png'></img>
									</a>
									<div id='ten'>
										<a href='proekt.php'>ПРОЕКТИРОВАНИЕ</a>
									</div>
								</div>
								<div id='type' style='top:3%; height:53.8%; '>
									<a  href='tippro.php'>
										<img id='im2' src='images/projekt.png'></img>
									</a>
									<div id='ten'>
										<a href='tippro.php'>Коттеджи</a>
									</div>
								</div>
							</div>
						</div>
						<div id='text'>
						<?php			
$q ="SELECT * FROM inside where  razdel='ГЛАВНАЯ' and chernovik='0'";
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
<body>