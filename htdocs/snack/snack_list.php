<?php
  include "../base.php";
// include config 필요
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

  <div class="list-group">
  <?php
  // 술 리스트 보여주기
  $sql_alc = "select matching1_table,group_concat(snack_name order by matching1_no) as 'snack_ids' from snack group by matching1_table order by matching1_table";
  //"select no,exp, first_value(name) over(partion by matching1_table order by matching1_no) from snack";//"select no, name, exp from soju";
  $run_alc = mysqli_query($connect, $sql_alc);

  while($result_alc = mysqli_fetch_array($run_alc)) {
    echo '
    <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">';
    if($result_alc["matching1_table"]==1)
        $sql_alctype = "beer";
    else if($result_alc["matching1_table"]==2)
        $sql_alctype="soju";
    else if($result_alc["matching1_table"]==3)
        $sql_alctype="makgeolli";
    else if($result_alc["matching1_table"]==4)
        $sql_alctype="cocktail";
    else if($result_alc["matching1_table"]==5)
        $sql_alctype="wine";
    else if($result_alc["matching1_table"]==6)
        $sql_alctype="nonalchol";
    else if($result_alc["matching1_table"]==7)
        $sql_alctype="liquor";
    else if($result_alc["matching1_table"]==8)
        $sql_alctype="etc";

      echo'<h5> '.$sql_alctype.' </h5>
        <small>3 days ago</small>
        </div>
        <p class="mb-1">'.$result_alc["snack_ids"].'
        <a href="./snack_'.$sql_alctype.'.php">더보기</a></p>
        <br>
    </a>
    </div>
  ';

}

?>
</div>
</article>