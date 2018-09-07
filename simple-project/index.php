<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
    <form action="handle.php" method="get">
        <h1>Регистрация!</h1>
        <p>
            <label>Введите имя: <input type="text" name="name" placeholder="Ваше имя" required></label>
        </p>
        <p>
            <label>Введите никнейм: <input type="text" name="nickname" placeholder="Ваш ник" required></label>
        </p>
        <p>
            <label>Введите пароль: <input type="password" name="pass1" placeholder="Ваш пароль" required></label>
        </p>
        <p>
            <label>Введите пароль ещё раз: <input type="password" name="pass2" placeholder="Ваш пароль" required></label>
        </p>
        <p>
            <label>Введите почту: <input type="text" name="email" placeholder="Ваша почта" required></label>
        </p>
        
        <p>
            <label>Дата рождения, год: <select name="year" required>
                <?php 
                    for ($i=10; $i < 100; $i++) { 
                        echo "<option value='$i'>19$i</option>";
                    }
                ?>
            </select></label>
            <label>Дата рождения, месяц: <select name="month" required>
                <?php 
                    for ($i=1; $i < 13; $i++) { 
                        if ($i < 10) {
                            echo "<option value='$i'>0$i</option>";
                        } else {
                            echo "<option value='$i'>$i</option>";
                        }
                    }
                ?>
            </select></label>
            <label>Дата рождения, день: <select name="day" required>
                <?php 
                    for ($i=1; $i < 32; $i++) { 
                        if ($i < 10) {
                            echo "<option value='$i'>0$i</option>";
                        } else {
                            echo "<option value='$i'>$i</option>";
                        }
                    }
                ?>
            </select></label>
        </p>
        <p><label>Ваш пол:<br> Мужчина <input type="radio" name="gender" value="Male" required> <br>Женщина<input type="radio" name="gender" value="Famale" required></label></p>
        <p>
            <input type="submit" value="Зарегистрироваться" name="go">
        </p>
    </form>
</body>
</html>