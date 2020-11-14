<?php
  include "../base.php";
  
  $mysqli=mysqli_connect("localhost", "root", "team15", "team15");
?>

<article class="container">
<div class="jumbotron" sttle="background-color : #F8F8FF">
  <div class="selectbox">
  <div class="btn-group">
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Choose the type of alcohol
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Beer</a>
      <a class="dropdown-item" href="#">Soju</a>
      <a class="dropdown-item" href="#">Makgeolli</a>
      <a class="dropdown-item" href="#">Cocktail</a>
      <a class="dropdown-item" href="#">Wine</a>
      <a class="dropdown-item" href="#">Non Alcohol</a>
      <a class="dropdown-item" href="#">Liquor</a>
      <a class="dropdown-item" href="#">etc</a>
    </div>
  </div>
  </div>
  <br><br><br>
  <div class="list-group">
  <?php
  // 술 종류 선택
  $sql_alctype = "beer";

  // 술 리스트 보여주기
  $sql_alc = "SELECT no, name, exp FROM $sql_alctype";
  $run_alc = mysqli_query($mysqli, $sql_alc);
  while($result_alc = mysqli_fetch_array($run_alc)) {
    echo '
    <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">'.$result_alc["name"].'</h5>
        <small>3 days ago</small>
        </div>
        <p class="mb-1">'.$result_alc["exp"].'</p>
    </a>
    </div>
  ';

}

?>
</div>
</article>