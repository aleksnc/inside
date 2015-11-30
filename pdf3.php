
  <script src="js/device.min.js"></script>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>

<style>
a{
text-decoration: none;
}

#vivod{
width:1000;
height:811;

}

</style>


<script>





var device=device.windows();
if(device!=true){
 document.write(" ВАШ БРАУЗЕР НЕ ПОДДЕРЖИВАЕТ ПЛАГИН. <br> ВЫ МОЖЕТЕ <a href='ftp/prise.pdf' target='_blank' download=''><b> СКАЧАТЬ ДОГОВОР НА ДИЗАЙН-ПРОЕКТ </b></a> ЗДЕСЬ"   );

} else {
  document.write("<embed src='ftp/dogovor-na-disain-pro.pdf' width='100%' height='100%' />"   );

}


</script>