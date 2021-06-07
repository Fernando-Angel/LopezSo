<?php

session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
    header("location: Bienvenido.php");
    exit;
}

require_once "connection.php";

$usuario = $password = "";
$usuario_error = $password_error = "";

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    if(empty(trim($_POST["user"])))
    {
        $usuario_error = "Favor de Ingresar un usuario";
    }else
    {
        $usuario = trim($_POST["user"]);
    }

    if(empty(trim($_POST["passwd"])))
    {
        $password_error = "Favor de Ingresar una contraseña";
    }else
    {
        $password = trim($_POST["passwd"]);
    }

    //VALIDAR USUARIO y CONTRASEÑA
    if(empty($usuario_error) && empty($password_error))
    {
        $sql = "SELECT usuario, contrasena FROM usuario WHERE usuario=?";

        if($stmt = mysqli_prepare($con, $sql))
        {
            mysqli_stmt_bind_param($stmt, "s", $param_usuario);
            $param_usuario = $usuario;

            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
            }
            if(mysqli_stmt_num_rows($stmt) == 1)
            {
                
                mysqli_stmt_bind_result($stmt, $usuario, $hashed_password);
                if(mysqli_stmt_fetch($stmt))
                {
                    if(password_verify($password, $hashed_password))
                    {
                        session_start();

                        $_SESSION["loggedin"] = true;
                        $_SESSION["usuario"] = $usuario;
                        header("location: Bienvenido.php");

                    }else
                    {
                        $password_error = "La contraseña no es valida";
                    }
                }
            }else
            {
                $usuario_error = "No se ha encontrado usuario similares";
            }
        }else
        {
            echo "Intente nuevamente";
        }
    }
    mysqli_close($con);
}





?>