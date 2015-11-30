function send()
{
//Получаем параметры
var data = $('#mydata').val()
  // Отсылаем паметры
       $.ajax({
                type: "POST",
                url: "senddata.php",
                data: "data="+data,
                // Выводим то что вернул PHP
                success: function(html) {
 //предварительно очищаем нужный элемент страницы
                        $("#preview").empty();
//и выводим ответ php скрипта
                        $("#preview").append(html);
                }
        });

}