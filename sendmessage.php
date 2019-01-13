<?php
$sendto   = "airdotsair@gmail.com";
$usermail1 = $_POST['pole1'];
$usermail2 = $_POST['pole2'];
$usermail3 = $_POST['pole3'];$usermail4 = $_POST['pole4'];
$usermail5 = "Xiaomi AirDots- оформление заказа";
$date_today = date("d.m.y");
$today[1] = date("H:i:s");
$usermail6 = "Время и дата отправки: $today[1] ; $date_today";
// Формирование заголовка письма
$subject  = "Заказ с сайта - Xiaomi AirDots";
$headers  = "From: " . strip_tags($usermail1) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail5) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Сообщение с сайта - iPhone X</h2>\r\n";
$msg .= "<p><strong>ФИО:</strong> ".$usermail1."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usermail2."</p>\r\n";
$msg .= "<p><strong>Город, отделение Новой Почты:</strong> ".$usermail3."</p>\r\n";
$msg .= "<p>".$usermail6."</p>\r\n";
$msg .= "</body></html>";
if (empty($usermail3)) {
        echo "Пожалуйста, заполните все поля!";
    }
else
{
// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}
}
?>
