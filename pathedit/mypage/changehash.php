<?php
    include '../config.php';  

    static $hash1;
    static $hash2;
    static $hash3;

    $userid = $_SESSION['userid'];
    $userno = $_SESSION['userno'];

    $newhash1 = $_POST['hash1'];
    $newhash2 = $_POST['hash2'];
    $newhash3 = $_POST['hash3'];
  
    $hashsql = "SELECT taste_hash1, taste_hash2, taste_hash3 FROM user_info WHERE user_no=$userno IS NOT NULL";
	$hashrun = mysqli_query($db,$hashsql);

	while($hashresult = mysqli_fetch_array($hashrun)) {
		$hash1 = $hashresult[0];
		$hash2 = $hashresult[1];
		$hash3 = $hashresult[2];
    }

    if ($newhash1 == "") {$newhash1 = 0;}
    if ($newhash2 == "") {$newhash2 = 0;}
    if ($newhash3 == "") {$newhash3 = 0;}

    $hashsql="UPDATE user_info SET taste_hash1=$newhash1, taste_hash2=$newhash2,taste_hash3=$newhash3 WHERE user_no=$userno;";
    mysqli_query($db, $hashsql);
    echo $hashsql;

    echo "<script>alert('Your favorite hashtags are changed.'); location.href='/mypage/mypage.php';</script>";
?>