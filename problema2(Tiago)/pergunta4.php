<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validação da resposta da pergunta anterior
    if (strtolower(trim($_POST['resposta'])) == 'brasil') {
        $_SESSION['acertos']++;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pergunta 4</title>
</head>
<body>
    <h1>Pergunta 4: Qual é o menor país da América do Sul?</h1>
    <form action="pergunta5.php" method="post">
        <label for="resposta">Resposta:</label>
        <input type="text" id="resposta" name="resposta" required><br><br>
        <input type="submit" value="Próxima">
    </form>
</body>
</html>

