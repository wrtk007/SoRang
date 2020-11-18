<!DOCTYPE html>
<?php
  include "../base.php";
  include "../config.php";
  
?>

<html>
<head>
        <meta charset = 'utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TK.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>my review</title>
</head>
<style>
.view_table {
border: 1px solid #444444;
margin-top: 30px;
}
.view_title {
height: 30px;
text-align: center;
background-color: #cccccc;
color: white;
width: 1000px;
}
.view_id {
text-align: center;
background-color: #EEEEEE;
width: 30px;
}
.view_id2 {
background-color: white;
width: 60px;
}
.view_hit {
background-color: #EEEEEE;
width: 30px;
text-align: center;
}
.view_hit2 {
background-color: white;
width: 60px;
}
.view_content {
padding-top: 20px;
border-top: 1px solid #444444;
height: 500px;
}
.view_btn {
width: 700px;
text-align: center;
margin: auto;
margin-top: 50px;
}
.view_btn1 {
height: 50px;
width: 100px;
font-size: 20px;
text-align: center;
background-color: white;
border: 2px solid black;
border-radius: 10px;
}
.view_comment_input {
width: 700px;
height: 500px;
text-align: center;
margin: auto;
}
.view_text3 {
font-weight: bold;
float: left;
margin-left: 20px;
}
.view_com_id {
width: 100px;
}
.view_comment {
width: 500px;
}
</style>

<body>

    <?php
                $number = $_GET['number'];
                $query = "select alc_name, review, review_score from user_review where review_no =$number";
                $result = $db->query($query);
                $rows = mysqli_fetch_assoc($result);
                $score = $rows['review_score'];
                //$alcohol_table= $rows['review_alc_table'];
               
                //$query1 = "select name from $sql_alctype where no =$alcohol_name";
                //$result1 = $db->query($query1);
                //$rows1 = mysqli_fetch_assoc($result1);
                
        ?>
 
        <table class="view_table" align=center>
        <tr>
                <td colspan="4" class="view_title"><?php echo $rows['alc_name']?></td>
        </tr>
        
        <tr>
                <td class="view_id">Score</td>
                <td class="view_id2"><?php echo $score ?></td>
        </tr>
 
 
        <tr>
                <td colspan="4" class="view_content" valign="top">
                <?php echo $rows['review']?></td>
        </tr>
        </table>
 
 
        <!-- MODIFY & DELETE -->
        <div class="view_btn">
                <button class="view_btn1" onclick="location.href='./myreview.php'">menu</button>
                <button class="view_btn1" onclick="location.href='./review_modify.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">modify</button>
 
                <button class="view_btn1" onclick="location.href='./review_delete.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">delete</button>
        </div>


        </tbody>
        </table>
        <!-- <div class="view_btn">
                <button class="view_btn1" onclick="location.href='./write.php'">글쓰기</button>
        </div> -->

        <!-- <div class = text>
        <font style="cursor: hand"onClick="location.href='./write.php'">글쓰기</font>
        </div> -->
 
 
 
 
 
 
</body>
</html>
