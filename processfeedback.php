<?php
//making short-names
$name= $_POST ['name'];
$email= $_POST['email'];
$feedback= $_POST ['feedback'];

//постоянная информация
$totaladdress= "r_nesterenko@i.ua";
$subject= "Отзыв по крокодилам";
$mailcontent= "Имя клиента: ".$name."\n".
              "E-mail: ".$email."\n".
              "Комментарий клиента: \n".$feedback."\n";
$fromadress= "From: webserver@crocodile.com";

//пробую отправку почтового сообщения
mail($totaladdress, $subject, $mailcontent, $fromadress);
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Crocodile-MINI</title>
    <style>
        P {
            text-indent: 20px;
            text-align: center;
            color: rgb(13, 20, 151);
        }
        .letter {
            color: #051297;
            font-size: 200%;
        }
        h1 {
            background: #D9FFAD; /* Цвет фона под заголовком */
            color: green; /* Цвет текста */
            padding: 2px; /* Поля вокруг текста */
        }
    </style>
</head>
<body>
<h1 align="center"><strong>Отзыв отправлен</strong></h1>
<p align="center"><span class="letter">Б</span>лагодарим за Ваш отзыв.</p>
</body>
</html>
