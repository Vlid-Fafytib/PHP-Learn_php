<?php
    include('includes/db.php');
    $nick = $_GET['nickname'];
    $pass = $_GET['pass1'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $year = $_GET['year'];
    $month = $_GET['month'];
    $day = $_GET['day'];
    $gender = $_GET['gender'];
    $birth = "19$year";
    $login_pass = $_GET['pass3'];
    $login_name = $_GET['logem'];
    if ($month < 10) {
        $birth .= "-0$month";
    } else{ 
        $birth .= "-$month";
    }
    if ($day < 10) {
        $birth .= "-0$day";
    } else{ 
        $birth .= "-$day";
    }

    $login1 = mysqli_query($connection, "SELECT COUNT(*) AS 'check' FROM `users` WHERE `nickname` = '$login_name' AND `password` = '$login_pass'");
    $login_fetched = mysqli_fetch_assoc($login1);
    if ($login_fetched['check'] != 0){
        echo "Здравствуйте дорогой ". $login_name;
    } else {
        echo "Вы ввели не верный логин или пароль!!!";
    }
    $nicks = mysqli_query($connection, "SELECT * FROM `users` WHERE `nickname` = '$nick'");
    if ($_GET["pass1"] != $_GET["pass2"]) {
        echo "Ваши пароли на совпадают";
    } else if (!$nicks || mysqli_num_rows($nicks) != 0){
        echo "Данный ник не1м уже занят";
    } else{
    $sql = "INSERT INTO `users` (`name`, `nickname`, `birth_date`, `gender`, `password`, `email`) VALUES ('$name', '$nick', '$birth', '$gender', '$pass', '$email')";
    if (mysqli_query($connection, $sql)) {
        echo "New record created successfully";
        } else {    
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }
    }

mysqli_close($connection);
?>