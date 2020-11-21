<?php
    ini_set('display_errors','0');
include "../base.php";
include "../config.php";
$delete_review_date = $_GET["review_date_delete"];

$sql_delete = "DELETE FROM user_review WHERE user_review.review_date = '$delete_review_date'";
$run_sql_delete = mysqli_query($db, $sql_delete);
$result = mysqli_fetch_array($run_sql_delete);

?>

<article class="container">
		<div class="jumbotron" sttle="background-color : #F8F8FF">
			<h1>Delete Review</h1>
            <br>
            <button onclick="location.href='rank_home.php'">OK. Go back to rank home page.</button>
            <br>
			
		</div>
    </article>