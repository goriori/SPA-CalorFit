
<? $path = $_SERVER['DOCUMENT_ROOT'] ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="/css/send.css">
    <title>Success</title>
</head>
<body>
    <div class="wrapper">
    
    <?
error_reporting(0);
$email = $_POST['email'];
?>
    <div class="text-message white-text">Письмо отправлено на адрес <p class="red-text"> <?echo $email?></p></div>
    <div>
        <p class="white-text">Пожалуйста проверьте вашу почту</p>
    </div>
<?
// пример использования
$file = "files/test.txt"; // файл
$mailTo = $email; // кому
$from = "calorfittt@yandex.ru"; // от кого
$subject = "Заявка с сайта"; // тема письма
$message = "Тестовое письмо с вложением"; // текст письма
$r = sendMailAttachment($mailTo, $from, $subject, $message, $file); // отправка письма c вложением
echo ($r)?'Письмо отправлено':'Ошибка. Письмо не отправлено!';
//$r = sendMailAttachment($mailTo, $from, $subject, $message); // отправка письма без вложения
//echo ($r)?'Письмо отправлено':'Ошибка. Письмо не отправлено!';
 
/**
* Отправка письма с вложением
* @param string $mailTo
* @param string $from
* @param string $subject
* @param string $message
* @param string|bool $file - не обязательный параметр, путь до файла
* 
* @return bool - результат отправки
*/
 
function sendMailAttachment($mailTo, $from, $subject, $message, $file = false){
    $separator = "---"; // разделитель в письме
    // Заголовки для письма
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: $from\nReply-To: $from\n"; // задаем от кого письмо
    $headers .= "Content-Type: multipart/mixed; boundary=\"$separator\""; // в заголовке указываем разделитель
    // если письмо с вложением
    if($file){
        $bodyMail = "--$separator\n"; // начало тела письма, выводим разделитель
        $bodyMail .= "Content-type: text/html; charset='utf-8'\n"; // кодировка письма
        $bodyMail .= "Content-Transfer-Encoding: quoted-printable"; // задаем конвертацию письма
        $bodyMail .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode(basename($file))."?=\n\n"; // задаем название файла
        $bodyMail .= $message."\n"; // добавляем текст письма
        $bodyMail .= "--$separator\n";
        $fileRead = fopen($file, "r"); // открываем файл
        $contentFile = fread($fileRead, filesize($file)); // считываем его до конца
        fclose($fileRead); // закрываем файл
        $bodyMail .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode(basename($file))."?=\n"; 
        $bodyMail .= "Content-Transfer-Encoding: base64\n"; // кодировка файла
        $bodyMail .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode(basename($file))."?=\n\n";
        $bodyMail .= chunk_split(base64_encode($contentFile))."\n"; // кодируем и прикрепляем файл
        $bodyMail .= "--".$separator ."--\n";
    // письмо без вложения
    }else{
        $bodyMail = $message;
    }
    
   
    $result = mail($mailTo, $subject, $bodyMail, $headers); // отправка письма
    return $result;  
}
?>
 <? include $path . "/components/footer.php"; ?>
    </div>
</body>
</html>