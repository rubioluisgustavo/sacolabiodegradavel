<?php

$nome = $_POST["Nome"];
$telefone = $_POST["DDD"].'-'.$_POST["Telefone"];
$email = $_POST["Email"];
$assunto = $_POST["Assunto"];
$mensagem = $_POST["Observacoes"];

$msg = "Nome: $nome\n";
$msg .= "Email: $email\n";
$msg .= "Telefone: $telefone\n";
$msg .= "Assunto: $assunto\n";
$msg .= "Mensagem: $mensagem\n";

$msg = utf8_decode($msg);

mail("marco_mapa@hotmail.com","Contato do Site","$msg","$email");
mail("contato@sacolabiodegradavel.com.br","Contato do Site","$msg","$email");

?>
      
     <h1>SUA MENSAGEM FOI ENVIADA COM SUCESSO!</h1><br />

           <h2> Em breve entraremos em contato.</h2>
           <p>&nbsp;</p>