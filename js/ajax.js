function send()
{
//�������� ���������
var data = $('#mydata').val()
  // �������� �������
       $.ajax({
                type: "POST",
                url: "senddata.php",
                data: "data="+data,
                // ������� �� ��� ������ PHP
                success: function(html) {
 //�������������� ������� ������ ������� ��������
                        $("#preview").empty();
//� ������� ����� php �������
                        $("#preview").append(html);
                }
        });

}