<?php
    include '../config.php';  

    $userid = $_SESSION['userid'];
    $userno = $_SESSION['userno'];
  
    $hash1 = $_POST['hash1'];
    $hash2 = $_POST['hash2'];
    $hash3 = $_POST['hash3'];

    $hashsql="UPDATE user_info SET taste_hash1=$hash1, taste_hash2=$hash2,taste_hash3=$hash3 WHERE user_no=$userno;";
    mysqli_query($db, $hashsql);

    echo "<script>alert('Your favorite hashtags are changed.'); location.href='/mypage/mypage.php';</script>";
?>