<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $destinatario = "dev.lazarokaua@gmail.com"; 
    $assunto = "Nova mensagem do formulário de contato";

    $corpoEmail = "Nome: $nome\n";
    $corpoEmail .= "Email: $email\n\n";
    $corpoEmail .= "Mensagem:\n$mensagem";

    
    mail($destinatario, $assunto, $corpoEmail);

    header("Location: mobileFirst.html");
    exit();
}
?>