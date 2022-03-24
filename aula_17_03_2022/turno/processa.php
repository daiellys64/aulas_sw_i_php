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
                echo "<h2>Bom dia, $nome !</h2>";
                break;
            case "T":
                echo "<h2>Boa Tarde, $nome !</h2>";
                break;
            case "N":
                echo "<h2>Boa noite, $nome !</h2>";
                break;
            default:
                echo "<h2>Carácter incorreto $nome , digite novamente.</h2>";
                break;
        }
    ?>
</body>
</html>
