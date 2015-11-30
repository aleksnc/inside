<head>
<title>ПОРТФОЛИО</title>	
<?php //include('head.php');
include('db.php');?>
<link rel="stylesheet" href="css/webm.css" type="text/css" media="screen"/>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.tinyscrollbar.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#scrollbar1').tinyscrollbar();
		
		
		
});	
</script>

<style>

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
			
			<div id='menu-tel'>		
				<select id='nav-tel' onchange='top.location.href = this.value;'>
					<option value='http://inside-ad.ru/index.php'>ГЛАВНАЯ</option>
					<option value='http://inside-ad.ru/kompany.php'>О КОМПАНИИ</option>
					<option value='http://inside-ad.ru/index.php'>ПОРТФОЛИО</option>
					<option value='http://inside-ad.ru/onas.php'>О НАС</option>
					<option value='http://inside-ad.ru/eskizi.php'>ЭСКИЗЫ</option>
					<option value='http://inside-ad.ru/disain.php'>ДИЗАЙН ИНТЕРЬЕРОВ</option>
					<option value='http://inside-ad.ru/mebel.php'>ПРОИЗВОДСТВО МЕБЕЛИ</option>
					<option value='http://inside-ad.ru/tippro.php'>КОТТЕДЖИ</option>
					<option value='http://inside-ad.ru/proekt.php'>ПРОЕКТИРОВВАНИЕ</option>
					<option value='http://inside-ad.ru/kontact.php'>КОНТАКТЫ</option>
				</select>
			</div>
		</div>	
</div>
<div id='a_all'>
	<div id='all'>
			
						
							<div class='verh' id='line'>
								<a  href='onas.php'>
									<img id='im1' src='images/onas.png'></img>
									<span  id='ten'>О НАС</span>
								</a>
								<a  href='eskizi.php'>
									<img id='im1'src='images/eskizi.png'></img>
									<span id='ten'>ЭСКИЗЫ</span>
								</a>
							</div>
							<div id='line'>	
									<a  href='disain.php'>
										<img id='im1' src='images/disain.png'></img>
										<span style='left:30%;'id='ten'>ДИЗАЙН ИНТЕРЬЕРОВ</span>
									</a>	
									<a  href='mebel.php'>
										<img  id='im1'src='images/mebel.png'></img>
										<span style='left:24%;' id='ten'>ПРОИЗВОДСТВО МЕБЕЛИ</span>
									</a>						
							</div>
							<div id='line'>							
									<a  href='proekt.php'>
										<img id='im1' src='images/tipr.png'></img>
										<span style='left:30%;'id='ten'>ПРОЕКТИРОВАНИЕ</span>
									</a>
									<a  href='tippro.php'>
										<img id='im1' src='images/projekt.png'></img>
										<span style='left:40%;'id='ten'>КОТТЕДЖИ</span>
									</a>
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
<?php include('niz.php');?>
