(function(){

    $(function(){
        $('#btn').on('click', function()
        {
            var user = $("#usr").val();
            var pass = $("#pass").val();
            var usError = $(".usError").val

            if(user != 'Fer')
            {
                $('.usError').html('Favor de ingresar su usuario');
                $('.usError').css("display","block");
            }
            else
                $('.usError').css("display","none");

            if(pass != '1234')
            {
                $('.passError').html('Favor de ingresar su contraseña');
                $('.passError').css("display","block");
            }
            else
                $('.passError').css("display","none");
            
            
            if(user == 'Fer' && pass =='1234')
            {
                $('.usError').css("display","none");
                $('.passError').css("display","none");
                $("#usr").val("");
                $("#pass").val("");
                $('#myModal').modal();
            }
        })
    })
    

}());