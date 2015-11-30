<?php include('db.php');?>	
	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 	
<link rel="stylesheet" href="css/page.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.2.js"></script>		
<link rel="stylesheet" href="css/website.css" type="text/css" media="screen"/>
<script type="text/javascript" src="js/click.js"></script>
<script type="text/javascript" src="js/jquery.tinyscrollbar.min.js"></script>
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
</head>
<script type="text/javascript">
	$(document).ready(function(){
	$("a.gallery").fancybox({
	 "imageScale": true,
	 "width": 1000,
	 "frameHeight":1000
	
	});
	
	 var clickObjects = document.getElementById('all').getElementsByTagName('img')
    for(var i=0; i<clickObjects.length; i++) {
        clickObjects[i].onmousedown = function(e){
	    dragObject  = this;
	    dragObject.style.backgroundColor = '';
	    return false
	}
	
    }
	
	
	var w=$(window).width();
	var h=$(window).height();
	/* var znach =Math.round(w/h);
	 if(znach=='2'){
	 $('#menu ul ul').css('width', '417%' );
	 }*/
	 
	 
	var width=$('#infa').width();
	var width_all=$('#all').width();
	var height_head=$('#head').height();
	var height_kom=$('#kompany1').height();
	
	var height_album=$('#album').height();
	var height_all=$('#all').height();
	
	var width_menu=$('#menu').width();
	
	var width_heh=$('#heh').width();

	var width_ulul=$('#menu ul ul').width();

	var right_ulul=-width_heh;
	
	
	var font=9;
	var fon=10.2;
	var fr=8.5;
	var proc=14.5;
	var fn=6.6;
	var fori=10.3;
	
	$('.fittet').css('font-size', height_head*font/'100' );
	$('.fittet span').css('font-size', height_head*font/'115' );
	$('.obsv').css('font-size', height_head*font/'80' );
	$('.fittet input').css('font-size', height_head*font/'115' );
	$('.fittet textarea').css('height', height_all/'5' );
	//$('.fittexta p').css('font-size', height_kom*font/'250'  );
	//$('.fittexta span').css('font-size', height_kom*font/'200'  );
	$('#texn a').css('font-size', height_head*fr/'100' );
	//$('#nav li a').css('font-size', height_head*fon/'100' );
	$('#kont').css('max-width', width_all/'3.5' );
	//$('#menu ul ul').css('top', height_head*proc/'100' );
	//$('#menu ul ul').css('right', right_ulul );
	//$('#menu ul ul li a').css('padding-left', height_head*fn/'100' );
		
	$('#album').css('width', height_all/'0.537' );
	
	if(w>'1000'){
	$('#all').css('width', height_all/'0.537' );
	$('#head').css('width', height_all/'0.537' );
	//$('#niz').css('width', height_all/'0.537' );
	}
	var hel= w/'2000';
	
		$('#album').css('height', '800'/hel );

		$('#scrollbar1').tinyscrollbar();
	
		
	
var message="";
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2) {
(message);
return false;}}}
if (document.layers) {
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS;
}else{
document.onmouseup=clickNS;
document.oncontextmenu=clickIE;
}
document.oncontextmenu=new Function("return false")

});	
	   function formatText(index, panel) {
	  return index + "";
	}
</script>
<body oncopy="return false">	
</body>
