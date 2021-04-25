
var usuario = document.forms['form']['user'];
var contraseña = document.forms['form']['password'];

var us_error = document.getElementById('user_error');
var pas_error = document.getElementById('password_error');
var us_error1 = document.getElementById('user_error1');
var pas_error1 = document.getElementById('password_error1');

usuario.addEventListener('textInput', usuario_verificado);
contraseña.addEventListener('textInput', contraseña_verificado);

function IniciarSesion()
{
    if (usuario.value.length <= 8)
    {
        usuario.style.border = "1px solid red";
        us_error1.style.display = 'none';
        us_error.style.display = 'block';        
        usuario.focus();
        return false;
    }
    if (contraseña.value.length < 3)
    {
        contraseña.style.border = "1px solid red";
        pas_error1.style.display = 'none';
        pas_error.style.display = 'block';        
        contraseña.focus();
        return false;
    }
}


//Aqui se encuentra al usuario y contraseña
//Usuario: Fernando, contraseña: 1234
//Las advertencias no cambian aun con la contraseña correcta que indicaria si lo es o none
//al momento de usar if similares a los de IniciarSesion se muestra la contraseña correcta.
//primer if(usuario.value.length >= 9)
//segundo if(contraseña.value.length >= 4)
function usuario_verificado()
{
    if (usuario.equals('Fernando'))
    {
        usuario.style.border = "1px solid rgb(144, 150, 155);";
        us_error.style.display = "none";
        us_error1.style.display = 'block';
        return false;
    }
}

function contraseña_verificado()
{
    if (contraseña.equals('1234'))
    {
        contraseña.style.border = "1px solid rgb(144, 150, 155);";
        pas_error.style.display = 'none';
        pas_error1.style.display = 'block';
        return false;
    }
}