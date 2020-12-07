<?php

if (isset($_POST["nome"]) && isset($_POST["peso"]) && ($_POST["altura"])){
    $nome = $_POST["nome"];    
    $peso = $_POST["peso"];    
    $altura = $_POST["altura"];    

    $resultado = $peso / pow($altura,2); 
}

else{
    header("location: imc.php");
    exit();
}

$classificacao = ["Baixo peso", "Peso normal", "Excesso de peso", "Obesidade Classe I", "Obesidade Classe II", "Obesidade Classe III"];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h2>Olá <?php echo $nome; ?> </h2>
    <p>O resultado do indice de massa corpórea para os valores de peso = <?php echo $peso; ?> e altura = <?php echo $altura; ?> é <b><?php echo $resultado;?></b>.</p>  
    <?php
    if ($resultado < 18.5){
        echo "Você está com " . $classificacao[0];
    }
    elseif ($resultado >= 18.5 && $resultado < 24.9){
        echo "Você está com " . $classificacao[1];
    }
    elseif ($resultado >= 24.9 && $resultado < 29.9){
        echo "Você está com " . $classificacao[2];
    }
    elseif ($resultado >= 29.9  && $resultado < 34.9){
        echo "Você está com " . $classificacao[3];
    }
    elseif ($resultado >= 34.9 && $resultado < 39.9){
        echo "Você está com " . $classificacao[4];
    }
    else {
        echo "Você está com " . $classificacao[5];
    }
    ?>
    
</body>
</html>
