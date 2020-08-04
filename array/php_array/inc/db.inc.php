<?php
    $db_server_name = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "php_array";

    date_default_timezone_set('Asia/Ho_Chi_Minh');

    $conn = mysqli_connect($db_server_name, $db_username, $db_password, $db_name);
    mysqli_set_charset($conn, "UTF8")
    
?>