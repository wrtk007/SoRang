<?php
    include "../config.php";  // including configuration file
    $number = $_GET['number'];
    $title = $_GET['title'];
    $content = $_GET['content'];
    $date = date('Y-m-d H:i:s');
    $query = "update qna set title='$title', content='$content', date='$date' where number=$number";
    $result = mysqli_query( $mysqli,$query);
    if($result) {
?>
        <script>
            alert("modified");
            location.replace("./myqna.php?number=<?=$number?>");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>
