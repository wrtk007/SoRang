<?php
include "../base.php";
include "../config.php";
$alcname = $_GET["name"];
?>

    <article class="container">
      <div class="jumbotron" sttle="background-color : #F8F8FF">
         <h1>Drink Detail</h1>
            <br>
            <div class="details">
            <?php 
                $sql_drink_all = "SELECT total_drink.*
                                        FROM ( SELECT img, name, score, price, origin, hashtag1, hashtag2, hashtag3, exp FROM beer
                                                UNION
                                                SELECT img, name, score, price, origin, hashtag1, hashtag2, hashtag3, exp FROM cocktail
                                                UNION
                                                SELECT img, name, score, price, origin, hashtag1, hashtag2, hashtag3, exp FROM etc
                                                UNION
                                                SELECT img, name, score, price, origin, hashtag1, hashtag2, hashtag3, exp FROM liquor
                                                UNION
                                                SELECT img, name, score, price, origin, hashtag1, hashtag2, hashtag3, exp FROM makgeolli
                                                UNION
                                                SELECT img, name, score, price, origin, hashtag1, hashtag2, hashtag3, exp FROM nonalcohol
                                                UNION
                                                SELECT img, name, score, price, origin, hashtag1, hashtag2, hashtag3, exp FROM soju
                                                UNION
                                                SELECT img, name, score, price, origin, hashtag1, hashtag2, hashtag3, exp FROM wine
                                                ) total_drink
                                        WHERE total_drink.name = '$alcname'
                                        ";
                $run_sql_all = mysqli_query($db, $sql_drink_all);
                
                while($result_detail = mysqli_fetch_array($run_sql_all)){
                    echo '
                        <div class="detail">
                            <div style="text-decoration:none;"  class="">
                                <img src='.$result_detail["img"].' width="100" height="130">
                                <div class="detail_exp">
                                    <h4 class="card-title">name: '.$result_detail["name"].'</h4>
                                    <h4 class="card-title">stars: '.$result_detail["score"].'</h4>
                                    <h4 class="card-title">price: '.$result_detail["price"].'</h4>
                                    <h4 class="card-title">origin: '.$result_detail["origin"].'</h4>
                                    <h4 class="card-title">hashtag: '.$result_detail["hashtag1"].', '.$result_detail["hashtag2"].', '.$result_detail["hashtag3"].'</h4>
                                    <h4 class="card-title">detail: '.$result_detail["exp"].'</h4>

                                </div>
                                    
                            </div>
                            <h2>Review</h2>
                            <div class="submit">
                                <form action="insert_review.php" method="GET"  id="myForm">
                                    <button>insert review</button><br>
                                    <input type="hidden" name="name" value="'.$result_detail["name"].'">
                                </form>
                             </div>
                        </div>
                        
                    ';
                }
                ?>
                </div>
                <div class="scores">
                <?php 
                //////////////전체 평균 별점 추가////////////////
                //사용자들의 평균 별점 출력
                $sql_count_review = "SELECT AVG(review_score) FROM user_review WHERE alc_name = '$alcname'";
                $run_sql_count = mysqli_query($db, $sql_count_review);
                $avg_score = mysqli_fetch_array($run_sql_count) or die(mysqli_error($db));
                echo "사용자 평균 평점 : ";
                echo $avg_score[0];
                echo '<br>';
                
                //해당 술에 대한 모든 리뷰 출력
                $sql_detail_drink = "SELECT * FROM user_review WHERE alc_name = '$alcname'";
                $run_sql_detail_drink = mysqli_query($db, $sql_detail_drink);
                
                while($result_reviews = mysqli_fetch_array($run_sql_detail_drink)){
                    $user_id_no = $result_reviews["review_id_no"];
                    $sql_id = "SELECT id FROM user_info WHERE user_info.user_no = $user_id_no";
                    $run_sql_id = mysqli_query($db, $sql_id);
                    $user_id = mysqli_fetch_array($run_sql_id);
                    echo '
                    <div class="review" style="border:2px solid gray;">
                            <div class="card-block">
                                <h4 class="card-title" style="font-size:15px;">score: '.$result_reviews["review_score"].'       /       id: '.$user_id[0].'      /       date: '.$result_reviews["review_date"].'</h4>
                                <h4 class="card-title" style="font-size:15px;">review: '.$result_reviews["review"].'</h4>
                            </div>
                    </div>
                    ';
                }?>
    <script>
    const myForm = document.getElementById("myForm");
        document.querySelector(".submit").addEventListener("click", function(){

        myForm.submit();

    });
    </script>