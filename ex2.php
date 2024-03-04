<?php $nome = "João";
$saudacao = "Olá, " . $nome . "! Bem-vindo!";
$saudacao_interpolada = "Olá, $nome! Bem-vindo!";?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudações</title>
</head>
<body>
    <h1>Saudação</h1>
    <p><?php echo $saudacao; ?> </p>
    <p><?php echo $saudacao_interpolada; ?></p>
</body>
</html>