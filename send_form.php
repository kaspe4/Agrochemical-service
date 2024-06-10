<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'logdog062@gmail.com'; // Замените на вашу электронную почту
    $subject = 'Новое сообщение от ' . $name;
    $body = 'Имя: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Сообщение: ' . $message;
    
    if(mail($to, $subject, $body)) {
        echo 'Сообщение отправлено успешно!';
    } else {
        echo 'Что-то пошло не так. Пожалуйста, попробуйте еще раз.';
    }
}
?>