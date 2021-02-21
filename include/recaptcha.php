<?php
/*КЛЮЧИ*/
define('SITE_KEY', '6LcYPMgZAAAAAAXBc5udAJjULAhoMbJD7qHxwdbN');
define('SECRET_KEY', '6LcYPMgZAAAAAM4Swrz8BXq3SPkFKPNeUbr0p_kf');

/*ОБРАБОТКА ЗАПРОСА*/
if($_POST){
    /*СОЗДАЕМ ФУНКЦИЮ КОТОРАЯ ДЕЛАЕТ ЗАПРОС НА GOOGLE СЕРВИС*/
    function getCaptcha($SecretKey) {
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }
    
    /*ПРОИЗВОДИМ ЗАПРОС НА GOOGLE СЕРВИС И ЗАПИСЫВАЕМ ОТВЕТ*/
    $Return = getCaptcha($_POST['reCAPTCHA']);
    /*ВЫВОДИМ НА ЭКРАН ПОЛУЧЕННЫЙ ОТВЕТ*/
    var_dump($Return);
    
    /*ЕСЛИ ЗАПРОС УДАЧНО ОТПРАВЛЕН И ЗНАЧЕНИЕ score БОЛЬШЕ 0,5 ВЫПОЛНЯЕМ КОД*/
    if($Return->success == true && $Return->score > 0.5){
        echo "Succes!";
    }
    else {
        echo "You are Robot";
    }
}
?>