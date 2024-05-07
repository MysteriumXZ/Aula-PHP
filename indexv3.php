<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu PHP</title>
</head>
<body>
    <h1>Isso é html</h1>
    <?php
        $dia = "Sábado";
        $temperatura = 30;

        if ($temperatura > 25){
            $clima = "quente";
        }elseif ($temperatura <= 25 && $temperatura >= 18){
            $clima = "chuvoso";
        }elseif($temperatura < 18){
            $clima = "nevando";
        };


        echo "O clima hoje está $clima e a temperatura está $temperatura ° e o dia hoje é $dia. <br>";

        $msg = "Bem-vindo";
        $user = " Aquiles";

        echo $msg.$user;

        $nomes = array(" João Victor", " Roberto Pink", " Jennifer", " Emyllie", "B. Letigo");

        for($i=0; $i <= 5; $i++){
            echo "<br>";
            echo $nomes[$i];

        };
        
        echo "<br><hr>";
        $total = 0;
        foreach($nomes as $nome) {
            echo "<br>";
            echo $nome;
            $total++ ;
        }

        echo "<br>";
        echo "<b>A quantidade de nomes é $total </b>";
    ?>
</body>
</html>