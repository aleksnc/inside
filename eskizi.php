<?php include('head.php');
include('db.php');?>	
<head>
<title>ЭСКИЗЫ</title>
<style>
#menu ul ul{
display:block;
}
#album{
height:800px;
}
</style>

</head>	
<script type="text/javascript">
$(document).ready(function() {
		$("a.gallery, a.iframe").fancybox();
	});

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
					<li  class="List1"><a style='color:#b98151;' href='index.php'>ПОРТФОЛИО</a>
						<ul >
							<li ><a href='onas.php'>о нас</a></li>
							<li ><a style='color:#b98151;' href='eskizi.php'>эскизы</a></li>
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
				<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
					<div class="viewport">
							<div class="overview"><div id='album'>
				<?php
				$sel="SELECT COUNT(id) FROM inside where type='img' and razdel='ЭСКИЗЫ'";
				$my_qu = mysql_query($sel);
				$row = mysql_fetch_row($my_qu);
				$rov = $row[0];
				if($rov>0){
					$q ="SELECT * FROM inside where type='img' and razdel='ЭСКИЗЫ'";
					$rez = mysql_query($q);
					for($im=0;$im<$rov;$im++){
						$array = mysql_fetch_array($rez);
						$id=$array['id'];
						$content=$array['content'];
						echo'<a style="text-decoration:none;" class="gallery" rel="group" title="'.$content.'" href="uploads/'.$id.'.jpg">
						<img src="mini/'.$id.'.jpg" /></a>';
					}
				}else{
				echo '<a class="gallery" rel="group" title="ФОТОК НЕТ" href="uploads/non.jpg">
	<img style="height: 100px; width: 151px; " src="uploads/non.jpg" /></a>';}
				
				?>			
				<div id='text'>
						<?php			
$q ="SELECT * FROM inside where razdel='ЭСКИЗЫ' and chernovik='0' and type='text' ";
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
	</div>
</div>
<?php include('niz.php');?>
