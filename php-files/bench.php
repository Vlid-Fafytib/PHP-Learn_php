<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
    <!-- <?php      -->
    // $gg = mt_rand(1, 100);
    // $name = "VALUE{$gg}";
    // define($name, 2);
    // echo constant($name);
    // echo $name;
    // define("BENCH", 387);
    // echo decbin(BENCH);
    
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
        
    // // $gg = mt_rand(1, 100);
    // // $name = "VALUE{$gg}";
    // // define($name, 2);
    // // echo constant($name);
    // // echo $name;
    // define("CREATE", 1 << 3);
    // define("READ", 1 << 2);
    // define("UPDATE", 1 << 1);
    // define("DELETE", 1 << 0);
    // define("ALL", CREATE|READ|UPDATE|DELETE);
    // echo decbin(CREATE|READ|UPDATE|DELETE)."<br>";
    // echo decbin(ALL)."<br>";
    // $user_perm = ALL;
    // $user_perm &= ~ UPDATE;
    // $user_perm &= ~ READ;
        

    // if ($user_perm & (CREATE|DELETE)){
    //     echo "Vlad KRUCH";
    // }

    // echo decbin($user_perm);

    // echo decbin(ALL)."<br>";
    // echo bindec(110000011)."<br>";

        //figures
    // define("LINE", 0);
    // define("CURVE", 1);
    // define("RECTANGLE", 2);
    // define("CIRCLE", 3);
    // //colours 
    // define("BLACK", 0);
    // define("BLUE", 4);
    // define("GREEN", 8);
    // define("YELLOW", 12);
    // define("ORANGE", 16);
    // define("RED", 20);
    // define("WHITE", 24);

    // $angle = 90 << 5;
    // $height = 15 << 14;
    // $width = 15 << 23;


    // echo decbin(GREEN|RECTANGLE);
    // echo "<br>";
    // echo ORANGE | CIRCLE;
    //sort
    // $arr = [3, 1, 7, 6, 9, 22, 44, 0, -1];
    // usort($arr, function($a, $b) { return $a <=> $b; });
    // for ($i=0; $i < (count($arr)); $i++)
    // echo $arr[$i]." ";
//     if(isset($_REQUEST["doGo"])){
//                 echo "Ваше имя {$_REQUEST['name']}";
//         }
    
// ?>    
<!-- //     <form action="<?=$_SERVER['SCRIPT_NAME'] ?>" method="post">
//         Введите имя:<input type="text" value="" name="name"><br>
//         Введите пароль:<input type="password" value="" name="pass"><br>
//         <input type="submit" value="GoGOGO" name="doGO">
//     </form> -->

</body>
</html>