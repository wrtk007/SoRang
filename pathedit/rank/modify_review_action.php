<?php
include "../base.php";
include "../config.php";

$score = $_GET["score"];
$review = $_GET["content"];
$modify_review = $_SESSION["review"];

$sql_date = "SELECT NOW()";
$run_sql_date = mysqli_query($db, $sql_date);
$review_date = mysqli_fetch_array($run_sql_date)[0];

$sql_modify = "UPDATE user_review SET review_score = '$score', review='$review', review_date='$review_date' WHERE user_review.review = '$modify_review'";
mysqli_query($db, $sql_modify);

?>

    <article class="container">
		<div class="jumbotron" sttle="background-color : #F8F8FF">
			<h1>Modify Review</h1>
            <br>
            <button onclick="location.href='rank_home.php'">OK. Go back to rank home page.</button>
            <br>
			
		</div>
    </article>