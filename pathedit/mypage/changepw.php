<?php
    ini_set('display_errors','0');
    include '../config.php';

    $user_id = $_SESSION['userid'];
    $user_no = $_SESSION['userno'];

    $newpw = password_hash($_POST['newPassword'],PASSWORD_DEFAULT);
    $checkpw = password_hash($_POST['confirmPassword'],PASSWORD_DEFAULT);

    if ($_POST['newPassword'] == "") {
        echo "<script>alert('Type the New Password'); history.back(); </script>";
    } else if ($_POST['confirmPassword'] == "") {
        echo "<script>alert('Type the Confirm Password'); history.back(); </script>";
    } else if ($_POST['newPassword'] != $_POST['confirmPassword']) {
        echo "<script>console.log(3);alert('New Password and Check Password are not same!'); history.back(); </script>";
    } else if ($_POST['newPassword'] == $_POST['confirmPassword']) {
        $password=password_hash($_POST['newPassword'],PASSWORD_DEFAULT);
	    $sql="UPDATE user_info SET password='$newpw' WHERE user_no=$user_no";
        $run=mysqli_query($db, $sql);
        if($run){
            session_destroy();
            echo "<script>alert('Your password is changed. Log in again'); location.href='../index.php' </script>";	
        } 
    } 
?>