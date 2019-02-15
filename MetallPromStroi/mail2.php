<?php

$recepient = "ibatullin@mpgs-ufa.ru";
$sitename = "mpgs-ufa.ru";

$email  = trim($_POST["email"]);

$pagetitle = "Желание получать новости от \"$sitename\"";
$message = "Посетитель подписался на обновления. <br> Почта: $email";

$headers  = "From: noreply@mpgs-ufa.ru" . PHP_EOL;
$headers .= "Reply-To: noreply@mpgs-ufa.ru" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

mail($recepient, $pagetitle, $message, $headers);

if (mail("ibatullin@mpgs-ufa.ru", $headers, $text)) {
  header("Location: http://mpgs-ufa.ru/thank-you/");
}
else {
  echo 'Ошибка отправки. Попробуйте еще раз!';
}