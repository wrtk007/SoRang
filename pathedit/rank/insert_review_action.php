<?php
include "../base.php";
include "../config.php";
    
    $userid=$_SESSION['userid'];
    $userno = $_SESSION['userno'];

    // $sql = "SELECT user_no FROM user_info WHERE user_id=$userid";

    $alcname333 = $_SESSION['name'];
    $score = $_POST["score"];
    $review = $_POST["content"];
    $date = date('Y-m-d H:i:s');            //Date

    $sql = "SELECT review_no FROM user_review ORDER BY review_no DESC LIMIT 1";
    $result = mysqli_fetch_row(mysqli_query($db,$sql));
    $reviewpk = $result[0];
    $reviewpk++;
    echo $reviewpk;

//     			$sql_random = "SELECT ROUND((RAND()*100)+1 AS random_num";
//     			$run_sql_random = mysqli_query($db, $sql_random);
//     			$review_no = mysqli_fetch_all($run_sql_random or die(mysqli_error($db)));
//     			echo $review_no;
    
    //user ������ session����, review�� �ʿ��� ������ �Է����� �ޱ�
    //�Է¹��� review db�� insert
    $sql_insert = "INSERT INTO user_review VALUES ($reviewpk, $userno, $review, $score, $date, $alcname333)";
    echo $sql_insert;
    mysqli_query($db, $sql_insert);

    if (mysqli_query($db, $sql_insert)) { ?>
        <article class="container">
		<div class="jumbotron" sttle="background-color : #F8F8FF">
			<h1>Insert Review</h1>
            <br>
            <button onclick="location.href='rank_home.php'">OK. Go back to detail page.</button>
            <br>
			
		</div>
        </article>
    <?php } else {
        echo "error";
    }
?>
