<?php
//mantenha esse e-mail para o envio!
$to = "marcos@permutando.com";
$subject = "Desenv 1";

$message = "
<html>
<head>
<title>Onfiak</title>
</head>
<body>
<p>Este formulário foi preenchido em: ".$_REQUEST["tempo"]."!</p>
<table>
<tr>
<td>Nome:</td>
<td>".$_REQUEST["nome"]."</td> 
</tr>
<tr>
<td>Idade:</td>
<td>".$_REQUEST["idade"]."</td>
</tr>
<tr>
<td>Email:</td>
<td>".$_REQUEST["email"]."</td>
</tr>
<tr>
<td>Telefone:</td>
<td>".$_REQUEST["telefone"]."</td>
</tr>
</table>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <dev1@permutando.com>' . "\r\n";

mail($to,$subject,$message,$headers);
?>ok