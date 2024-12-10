<?php
// Verifica se o método da requisição é POST, ou seja, se o formulário foi enviado.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Define o caminho da pasta onde os arquivos serão armazenados.
    $pastaUploads = 'uploads/';

    // Verifica se a pasta de uploads já existe. Caso não exista, ela é criada.
    if (!is_dir($pastaUploads)) { 
        // Cria a pasta usando a função mkdir()
        mkdir($pastaUploads);
    }

    // Armazena as informações do arquivo que vem do formulario HTML para o array superglobal $_FILES.
    $arquivo = $_FILES['arquivo'];

    // Obtém o nome do arquivo enviado.
    $nomeArquivo = basename($arquivo['name']); // basename() extrai apenas o nome do arquivo.

    // Monta o caminho completo para onde o arquivo será enviado.
    $caminhoCompleto = $pastaUploads . $nomeArquivo;

    // Obtém a extensão do arquivo e converte para letras minúsculas.
    $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION)); 
    // pathinfo() retorna informações sobre o caminho do arquivo. PATHINFO_EXTENSION pega a extensão.

    // Define uma lista de extensões permitidas.
    $tiposPermitidos = ['jpg', 'jpeg', 'png'];

    // Verifica se a extensão do arquivo não está na lista de permitidos.
    if (!in_array($extensao, $tiposPermitidos)) { 
        // in_array() verifica se um valor existe no array.
        echo "Erro: Envie apenas imagens no formato JPEG ou PNG.";
        exit; // Encerra a execução do script se o arquivo não for permitido.
    }

    // Tenta mover o arquivo do local temporário para a pasta de uploads.
    if (move_uploaded_file($arquivo['tmp_name'], $caminhoCompleto)) { 
        // move_uploaded_file() move o arquivo para o diretório especificado.
        echo "Upload realizado com sucesso!<br>";
        // Exibe a imagem enviada como uma prévia para o usuário.
        echo "<img src='$caminhoCompleto' alt='Imagem Enviada' style='max-width:300px;'>";
    } else {
        // Caso algo dê errado durante o envio do arquivo.
        echo "Erro ao enviar o arquivo.";
    }
}
?>
