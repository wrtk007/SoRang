<?php   
   include "../config.php";
   include "password.php";

   //POST로 받아온 아이다와 비밀번호가 비었다면 알림창을 띄우고 전 페이지로 돌아갑니다.
   if($_POST["userid"] == "" || $_POST["userpw"] == ""){
      echo '<script> alert("You miss id or password"); history.back(); </script>';
   }else{

   //password변수에 POST로 받아온 값을 저장하고 sql문으로 POST로 받아온 아이디값을 찾습니다.
   $password = $_POST['userpw'];
   $sql = mq("select * from user_info where id='".$_POST['userid']."'");
   $member = $sql->fetch_array();
   $hash_pw = $member['password']; //$hash_pw에 POSt로 받아온 아이디열의 비밀번호를 저장합니다. 

   if(password_verify($password, $hash_pw)) //만약 password변수와 hash_pw변수가 같다면 세션값을 저장하고 알림창을 띄운후 main.php파일로 넘어갑니다.
   {
      $_SESSION['userid'] = $member["id"];
	   $_SESSION['userpw'] = $member["password"];
	   $_SESSION['userno'] = $member["user_no"];
	   $_SESSION['hash1'] = $member["taste_hash1"];
	   $_SESSION['hash2'] = $member["taste_hash2"];
	   $_SESSION['hash3'] = $member["taste_hash3"];
	   $_SESSION['username'] = $member["name"];
	   $_SESSION['useremail'] = $member["email"];
	  echo "<script>alert('Login success'); location.href='/home/home.php';</script>";
	}else{ // 비밀번호가 같지 않다면 알림창을 띄우고 전 페이지로 돌아갑니다
	   echo "<script>alert('Check your id or password again'); history.back();</script>";
	}
   }
?>