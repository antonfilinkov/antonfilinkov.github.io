<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
// echo $fio;
// echo "<br>";
// echo $email;
if (mail("antonfilinkov.2006@gmail.com", "Заявка на подключение", "Имя:".$fio.". Телефон: ".$email ,"From: antonfilinkov.2006@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
