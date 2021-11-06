<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$services = $_POST['services'];
$colors_one = $_POST['colors_one'];
$colors_two = $_POST['colors_two'];
$press = $_POST['press'];
$kind = $_POST['kind'];
$message = $_POST['message'];

$to = "etiketkikz@yandex.kz";
$date = date ("d.m.Y");
$time = time ("h:i");
$from = $email;
$subject = "Заявка с сайта";

$msg="
Ваше имя: $name /n
WhatsApp: $phone /n
Выберите услугу печати: $services /n
Количество цветов (лицевая сторона): $colors_one /n
Количество цветов (оборотная сторона): $colors_two /n
Припресс: $press /n
Вид припресса: $kind /n
Дополнительная информация: $message";
mail($to, $subject, $msg, "From: $to ");

?>