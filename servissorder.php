<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ваш заказ</title>
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
<body bgcolor="#f0fff0">
<h1 align="center"><span class="letter">К</span>рокодил МИНИ</h1>
<h2 align="center"><span class="letter">Р</span>езультаты заказа</h2>
<p><img src="3.gif" alt="OOOoo!"></p>

<?php

$prices= array('Синие крокодилы'=> 100, 'Зеленые крокодилы'=> 50, 'Розовые крокодилы'=>300);

while ($element = each ($prices)) {
    echo "Цена в У.Е. (убитые еноты)";
    echo $element ['key'];
    echo " - ";
    echo $element {'value'};
    echo "<br />";
}

//*discount code
$agreementqty= $_GET['agreementqty'];
$audiyqty= $_GET['audiyqty'];
$salaryqty= $_GET['salaryqty'];
$adressqty= $_GET['adressqty'];

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$date= date('H:i, jS F Y');

$find= $_GET['find'];

if ($agreementqty < 10){
    $discount = 0;
} elseif (($agreementqty >= 10) && ($agreementqty <= 49)){
    $discount = 5;
} elseif (($agreementqty >= 50) && ($agreementqty <= 99)){
$discount = 10;
} elseif (($agreementqty) > 100){
$discount = 15;}

if ($audiyqty < 10){
    $discount = 0;
} elseif (($audiyqty >= 10) && ($audiyqty <= 49)){
    $discount = 5;
} elseif (($audiyqty >= 50) && ($audiyqty <= 99)){
    $discount = 10;
} elseif (($audiyqty) > 100){
    $discount = 15;}


if ($salaryqty < 10){
    $discount = 0;
} elseif (($salaryqty >= 10) && ($salaryqty <= 49)){
    $discount = 5;
} elseif (($salaryqty >= 50) && ($salaryqty <= 99)){
    $discount = 10;
} elseif (($salaryqty) > 100){
    $discount = 15;}
//*end of discount code

switch ($find) {
    case "a":
        echo "<p style=\"color: rebeccapurple;font-weight:800\">Хочет получать рассылку! Следующие крокодилы со скидкой в 99%!!!</p>";
        break;
    case "b":
        echo "<p style=\"color: rebeccapurple;font-weight:800\">Так не хотим рассылку?? Ждите, мы будем Вам писать каждый час!!!</p>";
        break;
    case "c":
        echo "<p style=\"color: rebeccapurple;font-weight:800\">Наш человек! Шлите адрес жертвы.</p>";
        break;
    case "d":
        echo "<p style=\"color: rebeccapurple;font-weight:800\">Увеличиваем объем нашей почты Вам от нас!!!</p>";
        break;
}


echo '<p>Заказ обработан в';
echo date('H:i, jS F Y');
echo '</p>';

echo "<p>Суммарный заказ</p>";



$totalqty = 0;
$totalqty = $agreementqty + $audiyqty + $salaryqty;
echo "Заказано крокодилов: " .$totalqty. "<br />";

if ($totalqty==0) {
    echo '<p style="color:red;font-weight:900">';
    echo 'Ну и сиди там без крокодилов, жадина!!!';
    echo '</p>';

}else {
    echo "Синих крокодилов: $agreementqty <br />";
    echo "Зеленых крокодилов: $audiyqty <br />";
    echo "Розовых крокодилов: $salaryqty <br />";
}
$totalammount = 0.00;


define('blueprice', 100);
define('greenprice', 50);
define('pinkprice', 300);

$totalammount = $agreementqty * blueprice
        + $audiyqty * greenprice
        + $salaryqty * pinkprice;

echo "Всего, без НДС: $".number_format($totalammount,2)."<br />";

$taxrate = 0.16;



$totalammount = $totalammount * (1 + $taxrate);
echo "Всего, в том числе НДС : $".
    number_format($totalammount,2)."<br />";

echo "Адрес доставки:" .$adressqty. "<br />";

//write it text file

$outputstring = $date."\t".$agreementqty."синих крокодилов\t"
. $audiyqty."зеленых крокодилов\t".$salaryqty."розовых крокодилов\t\$".$totalammount."\t"
.$adressqty."\n";

@ $fp = fopen("$DOCUMENT_ROOT/orders.txt", 'ab');
if (!$fp) {
    echo "<p><strong>В данный момент мы пьяные и не можем записать Ваш заказ."
        . "Попробуйте повторить его пипизже</strong></p></body></html>";
    exit;
}
flock ($fp, LOCK_EX);
fwrite ($fp, $outputstring, strlen($outputstring));
flock($fp, LOCK_UN);
fclose ($fp);
echo "<p>Заказ записали. Ждите - будет.</p>";
?>
<h3 align="center"><a href="index.php" title="Главная страница">Главная</a>
<h1 align="center"><span class="letter">П</span>окупайте наших крокодилов!</h1>
<p><img src="1.jpg" alt="Let's go!"></p>
</body>

</html>


