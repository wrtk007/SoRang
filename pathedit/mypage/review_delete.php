<?php
  include "../base.php";
  include "../config.php";
  
 
    $number = $_GET['number'];
    $query ="delete from user_review where review_no=$number";
    $result = $db->query($query);
    if($result) {
?>

<script>
            alert("delete.");
            location.replace("./myreview.php");
</script>
<?php    }
    else {
        echo "fail";
    }
?>
