<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Isso é PHP</h1>
    <?php
    $dia = "terça";
    $temperatura = "10";
    $clima = "Chuvoso";

    echo("Hoje tá $clima");
    
        if($temperatura > 25){
            $clima = "ensolarado";
        }elseif($temperatura <= 25 && $temperatura >= 18){
            $clima = "chuvoso";
        }elseif($temperatura < 18){
            $clima = "nevando";
        }
    ?>
</body>
</html>