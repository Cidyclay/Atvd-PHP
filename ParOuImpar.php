<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar </title>
</head>

<body>
    <?php
        $numero = 7;
       


        if($numero%2==0){
            echo "Este número e par: ".$numero;
        }else if($numero%2!=0){
            echo "Este número e impar ".$numero;
        }
    ?>
</body>
</html>