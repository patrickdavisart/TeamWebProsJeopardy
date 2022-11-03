<?php
    include '_dbconnect.php';
    
    session_start();

    $sql = "TRUNCATE `demo-registration`.`user_points`";
    $result = mysqli_query($conn, $sql);
    session_unset();
    session_destroy();
    header("location: welcome.php");
    exit;
?>