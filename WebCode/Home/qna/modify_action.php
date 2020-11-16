<?php
     $connect = mysqli_connect("localhost", "team15", "team15", "team15") or die("fail");
    $number = $_GET['number'];
    $title = $_GET['title'];
    $content = $_GET['content'];
    $date = date('Y-m-d H:i:s');
    $query = "update board set title='$title', content='$content', date='$date' where number=$number";
    $result = $connect->query($query);
    if($result) {
?>
        <script>
            alert("modified");
            location.replace("./view.php?number=<?=$number?>");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>


