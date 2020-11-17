<?php
    include '../config.php';  
    
    $userid = $_SESSION['userid'];
    $userno = $_SESSION['userno'];

    if(!isset($_SESSION['userid'])){
        echo "<script> alert('로그인해주세요.');
                location.replace('../index.php')</script>";
        exit();
    }

    $sql = "DELETE FROM user_info WHERE user_no=$userno";
    mysqli_query($db, $sql);

    echo "<script> alert('Thanks for enjoy the site!');
    location.replace('../index.php')</script>";

    session_destroy();
?>