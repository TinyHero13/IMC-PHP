<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>IMC</title>
</head>
<body>
    <form action="imc_calculo.php" method="post">
        Nome:<input type="text" name="nome" />
        Peso:<input type="number" name="peso" min="0" />
        Altura:<input type="number" name="altura" step="0.01" min="0" />
        <button type="submit">Enviar</button>
    </form>
</body>
</html>