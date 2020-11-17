

<?php
    include "../config.php";  // including configuration file
	
    $number = $_GET['number'];
   
    $query ="delete from qna where number=$number";
    $result = mysqli_query( $mysqli,$query);
    if($result) {
?>

<script>
            alert("deleted");
            location.replace("./myqna.php");
</script>
<?php    }
    else {
        echo "fail";
    }
?>