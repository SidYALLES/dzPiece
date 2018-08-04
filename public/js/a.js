$(document).ready(function () {
    $('#selectUserType').on('change',function () {
        $('#st').attr('disabled','disabled');
        $("#selectUserType option[value='0']").remove();
        var type=$(this).val();
        if(type != '')
        {
            $.ajax({
                url:"/listEmail",
                method:"GET",
                data:{type:type},
                //dataType:"JSON"
                success:function(data)
                {
                    $.each(JSON.parse(data),function (key,val) {
                       $('#email_list').length=1;
                       $('#email_list').append('<option>'+val.user_email+'</option>');
                    });
                }
            })
        }
    });

    $('#email_list').on('change',function () {
        $('#st1').attr('disabled','disabled');
        var email=$(this).val();
        var type= $('#selectUserType').val();
        if(email != '')
        {
            $.ajax({
                url:"/infoEmail",
                method:"GET",
                data:{email:email,type:type},
                //dataType:"JSON"
                success:function(data)
                {
                    $d=JSON.parse(data);
                    console.log($d);
                    $('#client_nom').val($d[2].nom);
                    $('#client_prenom').val($d[2].prenom);
                    $('#dateN').val($d[2].dateN);
                    $('#client_user_name').text($d[0].name);
                    $('#numero').val($d[1].numero);
                    $('#adresse').val($d[1].addresse);
                }
            })
        }
    });

    $('#email_list_admin').change(function () {
        $('#st2').attr('disabled','disabled');
        var email=$(this).val();
        if(email != '')
        {
            $.ajax({
                url:"/infoEmailAdmin",
                method:"GET",
                data:{email:email},
                //dataType:"JSON"
                success:function(data)
                {
                    $d=JSON.parse(data);
                    $('#nom').val($d[0].nom);
                    $('#prenom').val($d[0].prenom);
                    $('#user_name').text($d[1].name);
                    $('#privilege').text($d[0].privilege);
                }
            })
        }
    });
});