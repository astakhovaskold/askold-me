<?php

$status = 'success';
$info = 'Спасибо, ваше сообщение отправлено!';

if (!$_POST) {   // Проверка на наличие входящий данных POST
    $status = 'invalid';
    $info = 'Заполните форму и попробуйте снова.';
}

// Проверяем была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reCAPTCHA'])) {
 
    // Создаем POST запрос
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LcYPMgZAAAAAM4Swrz8BXq3SPkFKPNeUbr0p_kf';
    $recaptcha_response = $_POST['reCAPTCHA'];
 
    // Отправляем POST запрос и декодируем результаты ответа
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);
 
    // Принимаем меры в зависимости от полученного результата
    if ($recaptcha->success == true && $recaptcha->score >= 0.5) {
        // Проверка пройдена - отправляем сообщение.
    


$name = trim(strip_tags($_POST['name'])); // trim удаляет пробелы по краям, strip_tags удаляет html-теги
$email = trim(strip_tags($_POST['email']));
$phone = trim(strip_tags($_POST['phone']));
$type = trim(strip_tags($_POST['type']));
$comment = trim(strip_tags($_POST['message']));

if (!filter_var($phone, FILTER_SANITIZE_NUMBER_INT)) {
    $status = 'invalid';
    $info = 'Неверный номер телефона';
}
 
if (!$name) {
    $status = 'invalid';
    $info = 'Укажите имя';
}

if ($status == 'success') {
 
$to = 'astakhovaskold@gmail.com'; // адрес получателя
$subject = 'Новая заявка с сайта'; // тема письма
 
// формируем тело сообщения
$message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <table border="1" cellpadding="10">
                            <tr>
                                <td style="font-weight: bold;">Имя</td>
                                <td>'.$name.'</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">E-mail</td>
                                <td>'.$email.'</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Телефон</td>
                                <td>'.$phone.'</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Услуга</td>
                                <td>'.$type.'</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Сообщение</td>
                                <td>'.$comment.'</td>
                            </tr>
                        </table>                       
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги 
 
// формируем headers для письма
$headers  = "Content-type: text/html; charset=utf-8 \r\n"; // Заголовок для работы HTML в письме
$headers .= "From: Сообщение с сайта <info@webber.pw>\r\n"; // от кого
 
// кодируем заголовок в UTF-8
$subject = preg_replace("/(\r\n)|(\r)|(\n)/", "", $subject);
$subject = preg_replace("/(\t)/", " ", $subject);
$subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
 
// отправка
@mail($to, $subject, $message, $headers);

}
// echo 'Спасибо, ваше сообщение отправлено!';

} else {
        $status = 'invalid';
        $info = 'Ошибка reCAPTCHA, попробуйте снова';
    }
 
}

echo json_encode(['status' => $status, 'info' => $info]);
?>



