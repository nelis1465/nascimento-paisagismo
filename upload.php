<?php
$tipo = $_POST['tipo'];
$pasta = $tipo === 'imagem' ? 'uploads/imagens/' : 'uploads/videos/';

if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
    $destino = $pasta . basename($arquivo['name']);

    if (move_uploaded_file($arquivo['tmp_name'], $destino)) {
        echo "Arquivo enviado com sucesso.";
    } else {
        echo "Erro ao enviar o arquivo.";
    }
} else {
    echo "Nenhum arquivo enviado.";
}
?>