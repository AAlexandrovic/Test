<?php
//
if (isset($_POST["name"]) && isset($_POST["phonenumber"]) && isset($_POST["name_product"]) ) {

    // Формируем массив для JSON ответа
    $result = array(
        'name' => $_POST["name"],
        'phonenumber' => $_POST["phonenumber"],
        'name_product' => $_POST["name_product"]
    );

    // Переводим массив в JSON
    echo json_encode($result);
}
$to = "kuk.aka@mail.ru";
$from = trim($_POST["phonenumber"]);

//$message = htmlspecialchars($_POST["name_product"]);
//$message = urldecode($message);
//$message = trim($message);



////Отправка письма через print_r
//$message = $_POST["name_product"];
////
//foreach ($message as $name){
//   $names = $message;
//}
//$position = print_r($names, true);
//$body = "заказанные продукты: $position";
//$headers = "From: $from" . "\r\n" .
//    "Reply-to: $from"  . "\r\n" .
//    "X-Mailer: PHP/" . phpversion();
//

//    mail($to, 'Новый заказ',  $from . $body , $headers );


// отправка письма в цикле

$message = $_POST["name_product"];
$text_number = " Телефон <br>";
$text_body = "Номера продуктов ";
$br = " <br>";
$body = " <br>";
$mail_subject = "=?utf-8?B?". base64_encode("Новый заказ"). "?=";

$mail_headers="content-type:text/html; charset=utf-8";

foreach ($message as $k => $v) {
    $body .= "{$k} - {$v}<br>";
}
mail ($to, $mail_subject,$text_number . $from . $br . $text_body . $body, $mail_headers);


?>
