<?php

    error_reporting(E_ALL);

    $to_email = "doberman24@yandex.ru";     //Получатель данных
    $topic = "Сообщение с сайта-резюме";    //Тема сообщения
    $message = "Ваше имя: ".$_POST['name']."<br>"; //Присваиваем имя из формы
    $message .= "Email: ".$_POST['email']."<br>"; //Добавляем email из формы
    $message .= "Номер телефона: ".$_POST['phone']."<br>"; //Добавляем номер телефона из формы
    $message .= "Сообщение: ".$_POST['message']."<br>"; //Добавляем сообщение из формы
    $headers = 'MIME-Version: 1.0' . "\r\n"; //Формат заголовка и перевод строки
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; //Тип посылаемого контента

    if(mail($to_email, $topic, $message, $headers)) { //Отправляет данные на введенный email {
        echo "Сообщение успешно отправлено";
    } else {
        echo "При отправке сообщения возникли ошибки";
        echo  "<br>" . $to_email . "<br>" . $topic . "<br>" . $message . "<br>" . $headers . "<br><br>" ;
        ini_set('display_errors', 'On');
    }


//        mail($to_email, $topic, $message, $headers); //Отправляет данные на введенный email
 
    /*$name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);
    $name = urldecode($name);
    $email = urldecode($email);
    $message = urldecode($message);
    $name = trim($name);
    $email = trim($email);
    $message = trim($message);

    if(mail("doberman24@yandex.ru", "Сообщение с сайта-резюме", "Имя: ".$name.". Email: ".$email.". Сообщение: ".$message , "From: 24doberman@gmail.com \r\n")) {
        echo "Сообщение успешно отправлено";
    } else {
        echo "При отправке сообщения возникли ошибки";
    }*/
?>