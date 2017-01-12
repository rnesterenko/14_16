<?php

include("header.php");

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

<body bgcolor="#f0fff0">
<h3 align="center"><a href="index.php" title="Главная страница">Главная</a>
    <?php

    include("croco_front_page.php");

    ?>

<h1 align="center"><span class="letter">К</span>упить крокодила</h1>
<form>
   <table border="0" align="center">
       <p>Цены на крокодилов, у.е.</p>
       <tr>
           <td bgcolor="#808080" width="150" align="center">код товара</td>
           <td bgcolor="#808080" width="150" align="center">описание товара</td>
           <td bgcolor="#808080" width="150" align="center">стоимость, $</td>
           <?php
           $products= array( array('Blue', 'Синие крокодилы', 100),
               array('Green', 'Зеленые крокодилы', 50),
               array('Pink', 'Розовые крокодилы', 300) );
           for ($row= 0; $row < 3; $row++){
               for ($column= 0; $column <3; $column++){
                   echo '|'.$products[$row][$column];
               }
               echo '|<br />';
           }
           ?>

       </tr>


    </table>
    <table border="0" align="center">
        <p>Категории крокодилов и цены на них, у.е.</p>
        <tr>
            <td bgcolor="#808080" width="150" align="center">код товара</td>
            <td bgcolor="#808080" width="150" align="center">описание товара</td>
            <td bgcolor="#808080" width="150" align="center">стоимость, $</td>
        </tr>
        <?php
        $categories= array(array(array('Blue', 'Синие крокодилы', 100),
                                 array('Blue strong', 'Очень синие крокодилы', 110),
                                 array('Blue light', 'Не очень синие крокодилы', 90)
                                ),
                           array(array('Green', 'Зеленые крокодилы', 50),
                                 array('Green strong', 'Очень зеленые крокодилы', 60),
                                 array('Green light', 'Не очень зеленые крокодилы', 40)
                                      ),
                            array(array('Pink', 'Розовые крокодилы', 300),
                                  array('Pink strong', 'Очень розовые крокодилы', 310),
                                  array('Pink light', 'Не очень розовые крокодилы', 290)
                                        )
                           );
                     for ($layer = 0; $layer < 3; $layer++) {
                         echo "Слой $layer<br />";
                         for ($brow = 0; $brow < 3; $brow++) {
                             for ($column = 0; $column < 3; $column++) {
                                 echo '|'.$categories[$layer][$brow][$column];
                             }
                             echo "|<br />";
                         }
                     }

                         $products= array( array('Blue', 'Синие крокодилы', 100),
            array('Green', 'Зеленые крокодилы', 50),
            array('Pink', 'Розовые крокодилы', 300) );
        for ($row= 0; $row < 3; $row++){
            for ($column= 0; $column <3; $column++){
                echo '|'.$products[$row][$column];
            }
            echo '|<br />';
        }
        ?>
    </table>
</form>

<form action="servissorder.php" method="GET">
    <table border="0" align="center">
        <tr bgcolor="green">
            <td width="150" align="center">Наименование</td>
            <td width="150" align="center">Количество</td>
        </tr>
        <tr>
            <td>Синий крокодил</td>
            <td align="center"><input type="text" name="agreementqty" size="100" maxlength="100"  /> </td>
        </tr>
        <tr>
            <td>Зеленый крокодил</td>
            <td align="center"><input type="text" name="audiyqty" size="100" maxlength="100"  /> </td>
        </tr>
        <tr>
            <td>Розовый крокодил</td>
            <td align="center"><input type="text" name="salaryqty" size="100" maxlength="100"  /> </td>
        </tr>
        <tr>
            <td>Адрес доставки</td>
            <td align="center"><input type="text" name="adressqty" size="100" maxlength="100"  /> </td>
        </tr>
        <tr>
            <td>Хотите получать огромное количество спама от нас?</td>
            <td>
                <select name="find">
                    <option value="a">Да, мечтаю ежечасно!</option>
                    <option value="b">Нет, мне некогда чистить свою почту от спама.</option>
                    <option value="c">Я вышлю вам мейл человека, которому вы все это высылайте.</option>
                    <option value="d">Я тот человек, которому кто-то шлет спам от вас!</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Оформить заказ" /></td>
        </tr>
    </table>
</form>

<h2 align="center"><span class="letter">Д</span>оставка крокодилов</h2>
<p style="font-size:120%"><span class="letter">Н</span>аши крокодилы очень воспитаны и вежливы. Но согласитесь, не совсем удобно (хотя и весело) тащить их в метро. Они застряют в турникетах, облизываются на других пассажиров.</p>
<p><img src="4.JPG" alt="Delivery"></p>
<p style="font-size:120%"><span class="letter">А</span> представьте что Вы купили их несколько десятков...</p>
<h2 align="center"><span class="letter">П</span>роще заказать доставку у нас</h2>

<table border="0" cellpadding="3" align="center">
    <tr>
        <td bgcolor="#808080" width="150" align="center">Расстояние, км.</td>
        <td bgcolor="#808080" width="150" align="center">Стоимость, $</td>
    </tr>
<?php
$distance= 50;

while ($distance <= 250){
    echo "<tr>
        <td align=\"right\">".$distance."</td>
        <td align=\"right\">".($distance/10)."</td>
        </tr>\n";
    $distance += 50;
}
?>
</table>

<h1 align="center">С нашими ценами на доставку мы быстрее избавим Вас от Ваших денег!</h1>

<p><img src="1.jpg" alt="Let's go!"></p>

</body>



</html>