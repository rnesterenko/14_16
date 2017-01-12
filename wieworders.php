<?php
//создание короткого имени переменной

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];


?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Crocodile MINI - orders from clients</title>
</head>
<body>
<h1>Crocodile MINI</h1>
<h2>Заказы клиентов</h2>

<?php
$orders= file("$DOCUMENT_ROOT/orders.txt");

$number_of_orders= count($orders);

if ($number_of_orders == 0) {
    echo "<p align='center'><strong>Нет необработанных заказов.
        Загляните позже.</strong></p>";
}

echo "<table border=\"1\">\n";
echo "<tr>".
     "<th bgcolor = \"#CCCCFF\">Дата заказа</th>".
     "<th bgcolor = \"#CCCCFF\">Синие крокодилы</th>".
     "<th bgcolor = \"#CCCCFF\">Зеленые крокодилы</th>".
     "<th bgcolor = \"#CCCCFF\">Розовые крокодилы</th>".
     "<th bgcolor = \"#CCCCFF\">Всего</th>".
     "<th bgcolor = \"#CCCCFF\">Адрес</th>".
     "</tr>";

for ($i= 0; $i < $number_of_orders; $i++){
    $line = explode("\t", $orders[$i]);

    $line[1] = intval($line[1]);
    $line[2] = intval($line[2]);
    $line[3] = intval($line[3]);
    echo "<tr>".
        "<td>".$line[0]."</td>".
        "<td align=\"right\">".$line[1]."</td>".
        "<td align=\"right\">".$line[2]."</td>".
        "<td align=\"right\">".$line[3]."</td>".
        "<td align=\"right\">".$line[4]."</td>".
        "<td>".$line[5]."</td>".
        "</tr>";
}
echo "</table>";

    // первый код вывода результатов заказов без создания массивов. сейчас отключен.

//@ $fp = fopen("$DOCUMENT_ROOT/orders.txt", 'rb');
//flock($fp, LOCK_SH);

//flock($fp, LOCK_UN);
//if (!$fp) {
  //  echo "<p><strong>Нет необработанных заказов.
    //Загляните позже.</strong></p>";
    //exit;
//}

//while (!feof($fp)) {
  //  $order= fgets ($fp, 999);
  //  echo $order."<br />";
//}

//echo 'Конечная позиция в указателе файла: '.(ftell($fp));
//echo '<br />';
//rewind($fp);
//echo 'Позиция после вызова функции rewind (): '.(ftell($fp));
//echo '<br/>';

//fclose($fp);

?>
</body>
</html>
