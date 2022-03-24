<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/estilo.css">
    <title>Document</title>
</head>
<body>
    <?php
        $turno = $_POST['turno']; 
        $nome = $_POST['nome'];

        switch ($turno){
            case "M":
                echo "<h3>Bom dia, $nome !</h3>";
                break;
            case "T":
                echo "<h3>Boa Tarde, $nome !</h3>";
                break;
            case "N":
                echo "<h3>Boa noite, $nome !</h3>";
                break;
            default:
                echo "<h3>Carácter incorreto $nome , digite novamente.</h3>";
                break;
        }
    ?>
</body>
</html>