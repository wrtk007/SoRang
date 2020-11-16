<?php
    $connect = mysqli_connect('localhost', 'root', '1234', 'team15') or die ("connect fail");
	
    $number = $_GET['number'];
    //$sql = mq("delete from review_title where review_no='$number';");
    $query ="delete from user_review where review_no=$number";
    $result = $connect->query($query);
    if($result) {
?>

<script>
            alert("삭제되었습니다.");
            location.replace("./myreview.php");
</script>
<?php    }
    else {
        echo "fail";
    }
?>
