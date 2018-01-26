<?php
/*$to = 'msscout11@gmail.com';
$subject = 'Solicitud Pagina WEB!';
$message = 'Nombre: Soporte' . "\n";
$message .= 'Email: msscout11@gmail.com' . "\n";
$headers = 'From: soportecolombia@celmedia.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
ini_set("smtp_port", "25");
//mail ($to, $subject, $message, $headers);
//header("Location: thanks.html");*/
// Multiple recipients
$to = 'msscout11@gmail.com'; // note the comma

// Subject
$subject = 'Pruebas';

// Message
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <a href="http://localhost:63342/Cuentas/index.html">Prueba</a>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Manuel <' . $to . '>';
$headers[] = 'From: Soporte Cuentas <soporte@cuentas.com>';

// Mail it
if (mail($to, $subject, $message, implode("\r\n", $headers))){
    echo "<script>alert('Mensaje de reestablecer contraseña enviado'); window.location.href='README.md'</script>";
}else{
    echo "<script>alert('Algo ha pasado')</script>";
}
?>