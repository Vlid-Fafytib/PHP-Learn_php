<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_REQUEST['doGo'])) {
            foreach ($_REQUEST['known'] as $k => $v) {
                if ($k == "name") {
                    echo "Ваше предидущее имя $v<br>";
                } elseif($k == "pass"){
                    echo "Ваш предидущий пароль $v<br>";
                } elseif ($k == "radio" && $v == 1) {
                    echo "Я такпонимаю, вы любите пиццу";
                } else{
                    echo "";
                }
            } 
        }
    ?>
    <form action="<?=$_SERVER["SCRIPT_NAME"]?>" method="post">
        <!-- <input type="hidden" name="known[PHP]" value="0"> -->
        <input type="text" name="known[name]" value=""> Ваше имя<br>
        <!-- <input type="hidden" name="known[Perl]" value="0"> -->
        <input type="password" name="known[pass]" value=""> Ваш пароль<br>
        <p>Вы любите пиццу?</p>
        <input type="radio" name="known[radio]" value="1">Да <br>
        <input type="radio" name="known[radio]" value="0">Нет<br>
        <input type="submit" name="doGo" value="Go!">
    </form>
    
</body>
</html>