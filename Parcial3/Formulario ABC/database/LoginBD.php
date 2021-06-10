<?php
    require "login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../elementos/Style.css">

    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <div class="container">

        <!--<form class="form" method="post" name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>"-->
        <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
            <h1 class="label">Por favor inicie sesion</h1>
            <div class="font">Usuario:</div>
                <input autocomplete="off" type="user" name="user" id="usr" placeholder="usuario">
            <span class="msg-error"><?php echo $usuario_error ?></span>

            <div class="font font2">Contraseña:</div>
                <input autocomplete="off" type="password" name="passwd" id="pass" placeholder="contraseña">
            <span class="msg-error"><?php echo $password_error ?></span>

            <button type="submit" value="Iniciar" class="btn btn-primary" id="btn">Iniciar Sesión</button>
            <!--<button type="submit">Inicio de sesión</button>-->
        </form>
    </div>

</body>
</html>