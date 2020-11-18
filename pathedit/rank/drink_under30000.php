<?php
include "../base.php";
include "../config.php";
$price_highest = 30000;
$price_lowest = 10000;
?>

    <article class="container">
      <div class="jumbotron" sttle="background-color : #F8F8FF">
         <h1>Drink Rank</h1>
            <br>
            <h4>Set a price range : </h4>
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">price range</button>
              <div class="dropdown-menu">
                 <a class="dropdown-item" href="drink_under10000.php">under 10000</a>
                 <a class="dropdown-item" href="drink_under30000.php">10000 ~ 30000</a>
                 <a class="dropdown-item" href="drink_under50000.php">30000 ~ 50000</a>
                 <a class="dropdown-item" href="drink_under100000.php">50000 ~ 100000</a>
                 <a class="dropdown-item" href="drink_more100000.php">100000 or more</a>
                 <a class="dropdown-item" href="rank_home.php">all</a>
                </div>
            </div>
            <br>
            
            <?php 
            $sql_rank_drink = "SELECT RANK() OVER (ORDER BY total_drink.score DESC) as drink_ranking, total_drink.*
                                FROM ( SELECT name, exp, score, img, price FROM beer WHERE price < $price_highest and price >= $price_lowest
                                        UNION
                                        SELECT name, exp, score, img, price FROM cocktail WHERE price < $price_highest and price >= $price_lowest
                                        UNION
                                        SELECT name, exp, score, img, price FROM etc WHERE price < $price_highest and price >= $price_lowest
                                        UNION
                                        SELECT name, exp, score, img, price FROM liquor WHERE price < $price_highest and price >= $price_lowest
                                        UNION
                                        SELECT name, exp, score, img, price FROM makgeolli WHERE price < $price_highest and price >= $price_lowest
                                        UNION
                                        SELECT name, exp, score, img, price FROM nonalcohol WHERE price < $price_highest and price >= $price_lowest
                                        UNION
                                        SELECT name, exp, score, img, price FROM soju WHERE price < $price_highest and price >= $price_lowest
                                        UNION
                                        SELECT name, exp, score, img, price FROM wine WHERE price < $price_highest and price >= $price_lowest
                                        ) total_drink
                                ";
            $run_sql = mysqli_query($db, $sql_rank_drink);

            while($result = mysqli_fetch_array($run_sql)){
                $name = $result["name"];
                // $_SESSION['name'] = $name;
                // echo $_SESSION['name'];
                echo '
                <div class="card">
                   <div style="text-decoration:none;"  class="submit">
                        <img src='.$result["img"].' width="100" height="130">
                        <div class="card-block">
                            <form action="drink_detail.php" method="GET"  id="myForm">
                                <div>
                                    <h4 class="card-title">name: '.$result["name"].'</h4>
                                    <h4 class="card-title">stars: '.$result["score"].'</h4>
                                    <h4 class="card-title">price: '.$result["price"].'</h4>
                                    <h4 class="card-title">detail: '.$result["exp"].'</h4>
                                                          
                                    <input type="hidden" name="name" value="'.$result["name"].'">
                                </div>
                            </form>
                        </div>
                    </div>
             </div>
                ';
            }
            ?>
         
      </div>
    </article>
    <script>
    const myForm = document.getElementById("myForm");
        document.querySelector(".submit").addEventListener("click", function(){

        myForm.submit();

    });
    </script>