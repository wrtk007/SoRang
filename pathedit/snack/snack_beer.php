<?php
  include "../base.php";
  include "../config.php";

  //$connect = mysqli_connect('localhost', 'root', '1234', 'team15') or die ("connect fail");
?>
<article class="container">
<br><br>
  <h3>Recommended snacks that go with alcohol</h3><br>
<div class="jumbotron" sttle="background-color : #F8F8FF">
  <div class="selectbox">
  <div class="btn-group">
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Choose the type of alcohol
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item"  href="./snack_beer.php">Beer</a>
      <a class="dropdown-item" href="./snack_soju.php">Soju</a>
      <a class="dropdown-item" href="./snack_makgeolli.php">Makgeolli</a>
      <a class="dropdown-item" href="./snack_cocktail.php">Cocktail</a>
      <a class="dropdown-item" href="./snack_wine.php">Wine</a>
      <a class="dropdown-item" href="./snack_nonalchol.php">Non Alcohol</a>
      <a class="dropdown-item" href="./snack_liquor.php">Liquor</a>
      <a class="dropdown-item" href="./snack_etc.php">etc</a>
    </div>
  </div>
  </div>
  <br><br><br>
  <h2>Beer</h2>


  <?php

  $sql_alc = "select name,img,recipe, exp from snack where matching1_table=1 ";
  $run_alc = mysqli_query($db, $sql_alc);
  while($result_alc = mysqli_fetch_array($run_alc)) {
    echo '
    <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">'.$result_alc["name"].'</h5>
        </div>
        <img src='.$result_alc["img"].' width="350" height="300" class="align-self-start mr-3" alt="...">

        <br>
        <h6>Recipe</h6>
        <p class="mb-1">'.$result_alc["recipe"].'</p>
        <h6>Exp</h6>
        <p class="mb-1">'.$result_alc["exp"].'</p>
    </a>
    </div>
  ';

}
?>
        <!-- <img src='.$result_alc["snack_img"].' width="350" height="300" class="align-self-start mr-3" alt="..."> -->

  <!-- <article class="container">
		<div class="jumbotron" sttle="background-color : #F8F8FF">
        <div class="media"> -->
            <!-- <img src="./snackimg/어묵탕.PNG" width="350" height="300" class="align-self-start mr-3" alt="..."> -->
            <!-- <div class="media-body">
                <h5 class="mt-0"> $result_alc["matching1_table"] Fish cake soup(eomugtang)</h5>
                <p>The warm soup captivated Koreans. It is usually eaten with soju.</p>
            </div>
        </div>
		</div>
		
    </article> -->
  <div class="list-group">