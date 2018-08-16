<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
    <h2>Hello!</h2>
    <p>
    <?php 
        // $dat = date("d.m.y");
        // $tm = date("h:i:s");
        // echo "Текущая дата: $dat года <br/> \n";
        // echo "Текущее время: $tm по серверному времени<br/> \n";
        // echo "Квадараты и кубы первых 5 натуральных чисел";
        // echo "<ul>\n";
        // for ($i=0; $i < 6; $i++) { 
        //     echo "<li>$i в квадрате = " . ($i * $i);
        //     echo ", $i в кубе = " . ($i * $i * $i) . "</li>\n";
        // }
        
        // $gg = mt_rand(1, 100);
        // $name = "VALUE{$gg}";
        // define($name, 2);
        // echo constant($name);
        // echo $name;
        define("BENCH", 387);
        echo decbin(BENCH);
        
    ?>
</body>
</html>