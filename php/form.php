<?php
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $inquiry = $_POST['inquiry'];

    $to = "1-moment@mail.ru";
    $date = date ("d.m.Y");
    $time = date ("h:i");
    $from = $mobile;
    $subject = "Заявка";

    $msg = "
    Имя: $name \n 
    Мобильный: $mobile \n
    Запрос: $inquiry \n";
    mail($to, $subject, $msg, "From: $mobile");
?>

