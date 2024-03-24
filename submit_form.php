<?php
// Conectar ao banco de dados SQLite
$db = new SQLite3('questionario.db');

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber e limpar os dados do formulário
    $pergunta1 = $_POST["pergunta1"];
    $pergunta2 = $_POST["pergunta2"];
    $pergunta3 = $_POST["pergunta3"];
    $pergunta4 = $_POST["pergunta4"];
    $pergunta5 = $_POST["pergunta5"];
    $pergunta6 = $_POST["pergunta6"];
    $pergunta7 = $_POST["pergunta7"];
    $pergunta8 = $_POST["pergunta8"];
    $pergunta9 = $_POST["pergunta9"];
    $pergunta10 = $_POST["pergunta10"];

    // Preparar e executar a consulta SQL para inserir os dados no banco de dados
    $stmt = $db->prepare('INSERT INTO respostas (pergunta1, pergunta2, pergunta3, pergunta4, pergunta5, pergunta6, pergunta7, pergunta8, pergunta9, pergunta10) VALUES (:pergunta1, :pergunta2, :pergunta3, :pergunta4, :pergunta5, :pergunta6, :pergunta7, :pergunta8, :pergunta9, :pergunta10)');
    $stmt->bindParam(':pergunta1', $pergunta1);
    $stmt->bindParam(':pergunta2', $pergunta2);
    $stmt->bindParam(':pergunta3', $pergunta3);
    $stmt->bindParam(':pergunta4', $pergunta4);
    $stmt->bindParam(':pergunta5', $pergunta5);
    $stmt->bindParam(':pergunta6', $pergunta6);
    $stmt->bindParam(':pergunta7', $pergunta7);
    $stmt->bindParam(':pergunta8', $pergunta8);
    $stmt->bindParam(':pergunta9', $pergunta9);
    $stmt->bindParam(':pergunta10', $pergunta10);
    $stmt->execute();

    // Redirecionar para uma página de confirmação ou exibir uma mensagem de sucesso
    header("Location: formulario_enviado.php");
    exit();
}
?>
