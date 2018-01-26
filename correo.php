<?php
$to = 'soportecolombia@celmedia.com';
$subject = 'Solicitud Pagina WEB!';
$message = 'Nombre: Soporte' . "\n";
$message .= 'Email: msscout11@gmail.com' . "\n";
$headers = 'From: soportecolombia@celmedia.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
ini_set("smtp_port", "25");
//mail ($to, $subject, $message, $headers);
//header("Location: thanks.html");
echo "<script>alert('Mensaje enviado al correo'); window.location.href='index.html'</script>";
$correo = mail("soportecolombia@celmedia.com", "Prueba", "Esto es un mensaje de prueba", "From: Manuel Arevalo <msarevalo@cuentas.com>");


?>