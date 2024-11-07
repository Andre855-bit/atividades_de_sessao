<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quiz de Geografia</title>
</head>
<body>
    <h1>Bem-vindo ao Quiz de Geografia!</h1>
    <form action="pergunta1.php" method="post">
        <label for="nome">Qual é o seu nome?</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        <input type="submit" value="Começar">
    </form>
</body>
</html>