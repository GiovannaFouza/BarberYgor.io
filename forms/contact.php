<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "giiiiferracinii@gmail.com";
//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
$name = $_POST['name'];
// 3 - resgatar o assunto digitado no formulário e  grava na variavel
//$assunto
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mensagem = "<strong>Nome:  </strong>".$name;
$mensagem .= "<br>  <strong>Mensagem: </strong>"
.$_POST['message'];

//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  gmail.com<giiiiferracinii@gmail.com>\n";
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender:  <giiiiferracinii@gmail.com>\n";
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <giiiiferracinii@gmail.com.br>\n";
//caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";

mail($para, $name, $message, $headers);  //função que faz o envio do email.
?>