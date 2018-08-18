<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Вывод параметров в строку</title>
        <meta charset='utf-8'>
    </head>
    <body>
        <!-- <?php if (!isset($_REQUEST['doGo'])) {?>
            <form action="<?=$_SERVER['SCRIPT_NAME']?>">
                Логин: <input type="text" name="login" value=""><br />
                Пароль: <input type="password" name="password" value=""><br />
                <input type="submit" name="doGo" value="Нажмите кнопку!"> 
            </form>

        
        <?php } 
            else {
                if ($_REQUEST['login'] == "root" && $_REQUEST['password'] == "12345") {
                    echo "Доступ открыто для пользователя {$_REQUEST['login']}";
                    system("rundll1132.exe user32.dll, LockWorkStation");
                } else {
                    echo "Доступ закрыт";
                }
            }
        ?> -->
        <!-- Ваш IP: <?= $_SERVER['REMOTE_ADDR'] ?> <br>
        Ваш браузер: <?= $_SERVER['HTTP_USER_AGENT'] ?> -->
        <?php 
            $count = 0;
            if (isset($_COOKIE['count'])) {
                $count = $_COOKIE['count'];
            }
            $count++;
            setcookie("count", $count, 0x7FFFFFF, "/");
            echo $count;
            print_r($GLOBALS); 
        ?>

    </body>
</html> 