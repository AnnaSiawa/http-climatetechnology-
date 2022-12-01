<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);

$name = $_POST['name'];
$phone = $_POST['phone'];
//$address = $_POST['address'];
$message = $_POST['message'];

$mail->setFrom('annashursh1992@gmail.com'); // от кого будет уходить письмо?
$mail->addAddress('tklimat32@yandex.ru');     // Кому будет уходить письмо
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Заявка с сайта';
$mail->Body = '' . $name . ' ' . ' оставил(a) заявку, номер телефона: ' . $phone . '<br>Адрес этого пользователя: ' . 'не указан' . '<br>Сообщение пользователя: ' . $message;

$success = $mail->send();
$response = [
	'success' => $success
];

header('Content-type: application/json');
echo json_encode($response, JSON_UNESCAPED_UNICODE);

?>