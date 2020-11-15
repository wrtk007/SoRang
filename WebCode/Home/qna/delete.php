

<?php
     $connect = mysqli_connect("localhost", "team15", "team15", "team15") or die("fail");
	
    $number = $_GET['number'];
   
    $query ="delete from board where number=$number";
    $result = $connect->query($query);
    if($result) {
?>

<script>
            alert("삭제되었습니다.");
            location.replace("./index.php");
</script>
<?php    }
    else {
        echo "fail";
    }
?>