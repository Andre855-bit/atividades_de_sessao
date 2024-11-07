<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['resposta'])) {
    // Validação da resposta da última pergunta
    if (strtolower(trim($_POST['resposta'])) == 'tóquio') {
        $_SESSION['acertos']++;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado do Quiz</h1>
    <p>Olá, <?php echo $_SESSION['nome']; ?>! Você acertou <?php echo $_SESSION['acertos']; ?> de 10 perguntas.</p>
    <form action="inicio.php" method="post">
        <input type="submit" value="Reiniciar Quiz">
    </form>
</body>
</html>