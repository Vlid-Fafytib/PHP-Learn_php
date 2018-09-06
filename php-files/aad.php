<?php 
    $connection = mysqli_connect("127.0.0.1", "root", "", "test_db");
    if ($connection == false) {
        echo "Не удалось подключиться<br>";
        echo mysqli_connect_error();
        exit;
    }
    // $result = mysqli_query($connection, "SELECT * FROM `articles_categories`");
    // $r1 = mysqli_fetch_assoc($result);
    // print_r($r1);
    
    mysqli_close($connection);
?>