<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['message'];

    // Configurações do e-mail
    $para = "jorelbugado@gmail.com"; 
    $assunto = "Nova mensagem de contato de $nome";
    
    $corpo = "Nome: $nome\n";
    $corpo .= "Email: $email\n";
    $corpo .= "Mensagem:\n$mensagem";

    // Cabeçalhos do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviando o e-mail
    if (mail($para, $assunto, $corpo, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha ao enviar o e-mail.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
