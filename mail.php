<?php
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= ""From:".$name."<".$email.">\r\n"; // remetente
$headers .= "Return-Path: eu@seudominio.com\r\n"; // return-path
$envio = mail("contato@risaengenharia.com.br", "Assunto", "Texto", $headers);
 
if($envio)
 echo "Mensagem enviada com sucesso";
else
 echo "A mensagem não pode ser enviada";
?>
