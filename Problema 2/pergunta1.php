<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['acertos'] = 0;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pergunta 1</title>
</head>
<body>
    <h1>Pergunta 1: Qual é a capital do Brasil?</h1>
    <form action="pergunta2.php" method="post">
        <label for="resposta">Resposta:</label>
        <input type="text" id="resposta" name="resposta" required><br><br>
        <input type="submit" value="Próxima">
    </form>
</body>
</html>