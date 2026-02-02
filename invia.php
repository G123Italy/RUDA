<?php
$destinatario = "info@rivieradiulisseindanza.com";
$oggetto = "Nuovo messaggio dal form";

$nome = $_POST['nome'];
$email = $_POST['email'];
$messaggio = $_POST['messaggio'];

$contenuto = "Nome: $nome\n";
$contenuto .= "Email: $email\n\n";
$contenuto .= "Messaggio:\n$messaggio";

$headers = "From: $email";

mail($destinatario, $oggetto, $contenuto, $headers);

echo "Messaggio inviato correttamente!";
?>
