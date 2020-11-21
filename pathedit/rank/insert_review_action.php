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

    $sql_insert = "INSERT INTO user_review VALUES ($reviewpk, $userno, '$review', $score, '$date', '$alcname333')";

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