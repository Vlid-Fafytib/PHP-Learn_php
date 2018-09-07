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