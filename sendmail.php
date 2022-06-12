<?php
if ($_POST['capcha'] != 56) {

    // переадресация
    header('location: index.php');
    exit();
}
if ($_POST['subject'] == 1) {
    $subject = 'Вопрос по уроку';
} elseif ($_POST['subject'] == 2) {
    $subject = 'Личный вопрос';
} elseif ($_POST['subject'] == 3) {
    $subject = 'Благодарность';
} else {
    $subject = 'Вопрос по уроку';
}

$to = "111@gmail.com";
$from = trim($_POST['email']);

// обработка сообщения от пользователя
$message = htmlspecialchars($_POST['message']);
// декодирование адресов, чтобы не получить случайно адрес, код, теги...
$message = urldecode($message);
// trim - удаление пробелов
$message = trim($message);

// заголовки
$headers = "From: $from" . "\r\n" . "Reaply-To: $from" . "\r\n" . "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Письмо отправлено";
} else {
    echo "Письмо НЕ отправлено";
}
