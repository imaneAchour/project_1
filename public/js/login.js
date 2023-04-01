$(document).ready(function () {

    // handling the password field'eye 
    $('#sh-on').hide();
    $('#sh-off').hide();
    $('.fld-ps').keyup(function () {
        if($(this).val().length != 0){
            $('#sh-off').show(200);
        }else{
            $('#sh-off').hide(200);
            $('#sh-on').hide(200);
        }
    });
    $('#sh-off').click(function () {
        $(this).hide(200); 
        $('#sh-on').show(300);


        $('.fld-ps').attr('type','text');
    });

    $('#sh-on').click(function () { 
        $(this).hide(200); 
        $('#sh-off').show(300);


        $('.fld-ps').attr('type', 'password');
    });

    $('.fld-us').focus(function () { 
        $('.lb-us').css("transform","translateY(-17px)");
    });
    $('.fld-us').blur(function () { 
        if($(this).val().length == 0){
            $('.lb-us').css("transform","translateY(5px)");
        }
    });
    $('.fld-ps').focus(function () { 
        $('.lb-ps').css("transform","translateY(-17px)");
    });
    $('.fld-ps').blur(function () { 
        if($(this).val().length == 0){
            $('.lb-ps').css("transform","translateY(5px)");
        }
    });



});