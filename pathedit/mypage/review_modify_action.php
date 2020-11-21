<?php
 include "../base.php";
 include "../config.php";
   // $connect = mysqli_connect('localhost', 'root', '1234', 'team15') or die ("connect fail");
    $number = $_GET['number'];
    //$title = $_GET['review_title'];
    $content = $_GET['review'];
    $query = "update user_review set review='$content' where review_no='$number'";
    $result = $db->query($query);
    if($result) {
?>
        <script>
            alert("Edit finish.");
            location.replace("./review_view.php?number=<?=$number?>");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>


