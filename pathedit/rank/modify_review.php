<?php
include "../base.php";
include "../config.php";
$modify_review = $_GET["review"];
$_SESSION["review"] = $modify_review;
?>

	<article class="container">
		<div class="jumbotron" sttle="background-color : #F8F8FF">
			<h1>Modify Review</h1>
            <br>
            <form class="modify_review" method="get" action="modify_review_action.php">
            	<h2>score: </h2>
				<select name="score" id="score">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>              	<h3>detail review: </h3>
            	<input type="text" name="content" style="width:400px; height:100px" class="detail_input"><br><br>
            	<input type="submit" value="Submit">
            </form>
            <br>
		</div>
    </article>
    
<script>
    const myForm = document.getElementById("myForm");
        document.querySelector(".submit").addEventListener("click", function(){

        myForm.submit();

    });
</script>