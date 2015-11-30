<?php
SESSION_START();
include('db.php');
if(isset($_SESSION['tempid'])){ $temp=$_SESSION['tempid'];}
if(isset($_POST['type'])){
	$type=$_POST['type']; 

if($type=='albomi') {$_SESSION['albomi']=$_POST['name'];}else{
	$_SESSION['razd']=$_POST['name'];
	$_SESSION['r_type']=$_POST['type'];}
}	
if(isset($_SESSION['razd'])){	
	$ntype=$_SESSION['razd'];	
	if($_SESSION['r_type']=='razd'){ $tip='img';}else{$tip='text';}

	if($ntype=='ЧЕРНОВИК'){  $where=" where type='$tip' and chernovik='1'";}
	else{$where=" where type='$tip' and razdel='$ntype'";	}
 
	if($ntype!='ДИЗАЙН ИНТЕРЬЕРА'){
		if($tip=='img'){
			unset($_SESSION['albomi']);
			$sel ="SELECT COUNT(id) FROM inside".$where;
			$my_qu = mysql_query($sel);
			$row = mysql_fetch_row($my_qu);
			$rov = $row[0];
			$q ="SELECT * FROM inside".$where;
			$rez = mysql_query($q);
			for($im=0;$im<$rov;$im++){
				$array = mysql_fetch_array($rez);
				$id=$array['id'];
				echo '<li class="sign">
							<div id="tovar">
								<img class="img"  id="'.$id.'" onclick="pic(event)" src="uploads/'.$id.'.jpg"/>
							</div>
						</li>';
			}
		}else{
			
			unset($_SESSION['albomi']);
			$sel ="SELECT COUNT(id) FROM inside".$where;
			$my_qu = mysql_query($sel);
			$row = mysql_fetch_row($my_qu);
			$rov = $row[0];
			$q ="SELECT * FROM inside".$where;
			$rez = mysql_query($q);
			for($im=0;$im<$rov;$im++){
				$array = mysql_fetch_array($rez);
				 $id=$array['id'];
				  $content=$array['content'];
				echo '
				<div style="position: relative; border: 1px solid red; width: 400px; 
				height: 30px;  margin-top: 10px; padding: 10px;" >
				<textarea id='.$id.'t style="position: absolute; width: 400px; 
				height: 30px; border:none; "  >'.$content.'</textarea>
				
				<div id="'.$id.'"  onclick="text(event)" class="zaslon"></div>
				</div>
				';
			}
		
		}	
	}else{	
	echo "<div id='albomi'>
<p>ВЫБРАТЬ АЛЬБОМ <br>
	<select class='select' id='albomi' onChange='edit(this)' >
		<option id='albomi'>НЕ ВЫБРАН</option>
		<option id='albomi' value='1'>АЛЬБОМ 1<br></option>
		<option id='albomi' value='2'>АЛЬБОМ 2<br></option>
		<option id='albomi' value='3'>АЛЬБОМ 3<br></option>
		<option id='albomi' value='4'>АЛЬБОМ 4<br></option>
		<option id='albomi' value='5'>АЛЬБОМ 5<br></option>
		<option id='albomi' value='6'>АЛЬБОМ 6<br></option>
		<option id='albomi' value='7'>АЛЬБОМ 7<br></option>
	</select>
</p>
</div>";
	}
}

if(isset($_SESSION['albomi'])){
	$wher=$_SESSION['albomi'];
	 $tip;
	if($tip!='text'){
		$sel="SELECT COUNT(id) FROM inside where nomer='$wher' and type='img'";
		$my_qu = mysql_query($sel);
		$row = mysql_fetch_row($my_qu);
		$rov = $row[0];
		
		$sql ="SELECT * FROM inside where nomer='$wher' and type='albom'";
		$r = mysql_query($sql);
		$ar = mysql_fetch_array($r);
		$id=$ar['id'];
		$content=$ar['content'];
		
		echo'<img class="albom"  id="'.$id.'" onclick="pic(event)" src="uploads/'.$id.'.jpg"/>';
		echo'<span id="nazv">АЛЬБОМ №'.$wher.'<br>'.$content.'</span>';
				
		$q ="SELECT * FROM inside where nomer='$wher' and type='img'";
		$rez = mysql_query($q);
		for($im=0;$im<$rov;$im++){
			$array = mysql_fetch_array($rez);
			$id=$array['id'];
			echo '<li class="sign">
						<div id="tovar">
							<img class="img"  id="'.$id.'" onclick="pic(event)" src="uploads/'.$id.'.jpg"/>			
						</div>
					</li>';
		}
	} else{
		$sel ="SELECT COUNT(id) FROM inside where type='$tip' and razdel='$ntype' and nomer='$wher'";
		$my_qu = mysql_query($sel);
		$row = mysql_fetch_row($my_qu);
		$rov = $row[0];
		 $q ="SELECT * FROM inside where type='$tip' and razdel='$ntype' and nomer='$wher'";
		$rez = mysql_query($q);
		for($im=0;$im<$rov;$im++){
			$array = mysql_fetch_array($rez);
			 $id=$array['id'];
			  $content=$array['content'];
			echo 
			'<div style="position: relative; border: 1px solid red; width: 400px; 
			height: 30px;  margin-top: 10px; padding: 10px;" >
			<textarea id='.$id.'t style="position: absolute; width: 400px; 
			height: 30px; border:none; "  >'.$content.'</textarea>
			
			<div id="'.$id.'"  onclick="text(event)" class="zaslon"></div>
			</div>';
		}
	}		
}		
			?>