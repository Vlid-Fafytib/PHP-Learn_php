<?php
    include('includes/db.php');
    $result = mysqli_query($connection, "SELECT * FROM `articles_categories`");
    if (mysqli_num_rows($result) == 0){
        echo "Категорий не найдено";
    } else {?>
        <ul>
            <?php 
            // while (($cat = mysqli_fetch_assoc($result))) {
            //     $articles_count = mysqli_query($connection, "SELECT COUNT(`id`) AS `total_count` FROM `articles` WHERE `categorie` = " . $cat['id']);
            //     $articles_count_result = mysqli_fetch_assoc($articles_count);
            //     echo '<li>'.$cat['title'].' ('. $articles_count_result['total_count'].')</li>';
            // }
            ?>
        </ul>
    <?php
    }

    $start_date = '2016-12-10 14:00:00';
    $start_date_timestamp = strtotime($start_date);
    $diff = time() - $start_date_timestamp;
    $days_passed = floor(((($diff / 60) / 60) / 24) / 365);
    echo 'Между ' .date('d.m.Y H:i:s', $start_date_timestamp). ' и ' . date('d.m.Y H:i:s') . ' прошло ' . $days_passed. ' год';
    ?>

<?php 
    mysqli_close($connection);
?>
