<?php
    include('includes/db.php');

if ($_GET["pass1"] != $_GET["pass2"]) {
    echo "Ваши пароли на совпадают";
}