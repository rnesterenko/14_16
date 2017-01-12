<?php
$pictures= array('happy0.jpg', 'happy1.jpg', 'happy2.jpg', 'happy3.jpg', 'happy4.jpg',
    'happy5.jpg', 'happy6.jpg',);
shuffle($pictures);
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

    <h1 align="center">Наши счастливые покупатели</h1>
    <div align="center">
        <table width= 100%>
            <tr>
    <?php
    for ($i= 0; $i <3; $i++) {
        echo "<td align = \"center\"><img width='400' src=\"";
        echo $pictures[$i];
        echo "\"/></td>";
    }
    ?>
            </tr>
        </table>
    </div>

</body>
</html>