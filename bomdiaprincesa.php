<?php
include_once 'index.html';
// Recebe os nomes passados por GET
if (isset($_GET['nome']) && isset($_GET['nome2'])) {
    $nome1 = $_GET['nome'];
    $nome2 = $_GET['nome2'];
} else {
    echo "Por favor, insira seus nomes!";
    exit;
}

// Gera uma porcentagem de amor aleatória
$amor = rand(1, 100);

// Mostra a porcentagem do amor entre os dois nomes
echo "Essa é a porcentagem do amor entre $nome1 e $nome2 dar certo: $amor%";

// Mostra uma mensagem de amor com base na porcentagem gerada
if ($amor < 60) {
    echo "<br>";
    echo "<br>";
    echo "Está quase mano 🙁";
} elseif ($amor >= 60) {
    echo "<br>";
    echo "<br>";
    echo "O Amor está acontecendo ❤️";
} elseif ($amor <= 10) {
    echo "<br>";
    echo "<br>";
    echo "Foi triste mano 😭";
}

// Mostra um botão para voltar à página inicial
echo "<br>";
echo "<button onclick=\"window.location='index.html'\">Voltar</button>";

?>