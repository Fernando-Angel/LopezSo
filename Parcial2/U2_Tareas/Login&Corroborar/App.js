
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
    if (usuario.value.length < 9)
    {
        usuario.style.border = "1px solid red";
        us_error1.style.display = 'none';
        us_error.style.display = 'block';        
        usuario.focus();
        return false;
    }
    if (contraseña.value.length < 9)
    {
        contraseña.style.border = "1px solid red";
        pas_error1.style.display = 'none';
        pas_error.style.display = 'block';        
        contraseña.focus();
        return false;
    }
}

function usuario_verificado()
{
    if (usuario.value.length >= 8)
    {
        usuario.style.border = "1px solid rgb(144, 150, 155);";
        us_error.style.display = "none";
        us_error1.style.display = 'block';
        return true;
    }
}

function contraseña_verificado()
{
    if (contraseña.value.length >= 8)
    {
        contraseña.style.border = "1px solid rgb(144, 150, 155);";
        pas_error.style.display = "none";
        pas_error1.style.display = 'block';
        return true;
    }
}