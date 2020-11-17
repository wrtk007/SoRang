<?php
  include "../base.php";
  include "../config.php";
  
  //$connect = mysqli_connect('localhost', 'root', '1234', 'team15') or die ("connect fail");
?> 
<!DOCTYPE html>
 
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
           // $connect = mysqli_connect('localhost', 'root', '1234', 'team15') or die ("connect fail");
            $id = $_GET['id'];
            $number = $_GET['number'];
            $query = "select review_title, review, review_id from user_review where review_no =$number";
            $result = $db->query($query);
            $rows = mysqli_fetch_assoc($result);
 
            $title = $rows['review_title'];
            $content = $rows['review'];
            $usrid = $rows['review_id'];
 
           // session_start();
 
 
            $URL = "./myreview.php";
 
            
            if(!isset($_SESSION['userid'])) {
                  ?>
                  <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                  </script>
        <?php   }
                else if($_SESSION['userid']==$usrid) {
        ?>
        <br>
        <form method = "get" action = "review_modify_action.php">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white> 글수정</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                <tr>
                        <td>작성자</td>
                        <td><input type="hidden" name="id" value="<?=$_SESSION['userid']?>"><?=$_SESSION['userid']?></td>
                        </tr>
 
                        <tr>
                        <td>제목</td>
                        <td><input type = text name = review_title size=60 value="<?=$title?>"></td>
                        </tr>
 
                        <tr>
                        <td>내용</td>
                        <td><textarea name = review cols=85 rows=15><?=$content?></textarea></td>
                        </tr>
 
                        </table>
 
                        <center>
                        <input type="hidden" name="number" value="<?=$number?>">
                        <input type = "submit" value="ok">
                        </center>
                </td>
                </tr>
        </table>
        <?php   }
                else {
        ?>              <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
        ?>
       
 </body>
 </html>