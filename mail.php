<?php
// https://www.php.net/manual/fr/function.mail.php
// Envoi de mail avec la methode mail :
$to = "dskfjgsdkfjl@jsdfg.fr";
$subject = "kjdlkslghfsdjkl";
$message = "<html lang='fr'>
<head>

    <title>Hello World</title>
</head>
<body>

<h1>Hello World</h1>
    <img src='https://qskfljqsdf.com/img/monImage.jpg'>
</body>
</html>";
// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// En-têtes additionnels
$headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
$headers[] = 'From: contact@costumShop.com';
$headers[] = 'Cc: anniversaire_archive@example.com';
$headers[] = 'Bcc: anniversaire_verif@example.com';

/* autre methode sans utiliser l'implode dans la fonction mail

$headers = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>'."\r\n";
$headers .= 'From: contact@costumShop.com'."\r\n";
*/


// Envoi
mail($to, $subject, $message, implode("\r\n", $headers));
