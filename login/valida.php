<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>VALIDA</title>
</head>
<body>
<?php
    $usuario= $_POST['usuario'];
    $senha= $_POST['senha'];

    $user='DAIELLY';
    $pass='1234';

    if(($usuario== $user)&&($senha==$pass)){
        //echo"Ok,validado";
        session_start();
        $_SESSION['username']=$usuario;
        $_SESSION['logado']= 1;
        header("Location:restrita.php");
    }
    else{
        echo"NAOOOOOOOO ";
    }

?>
</body>
</html>