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
        table{
                border-top: 1px solid #444444;
                border-collapse: collapse;
        }
        tr{
                border-bottom: 1px solid #444444;
                padding: 10px;
        }
        td{
                border-bottom: 1px solid #efefef;
                padding: 10px;
        }
        table .even{
                background: #efefef;
        }
        .text{
                text-align:center;
                padding-top:20px;
                color:#000000
        }
        .text:hover{
                text-decoration: underline;
        }
        a:link {color : #57A0EE; text-decoration:none;}
        a:hover { text-decoration : underline;}
</style>
<body>

    </nav>
<?php
        //$sql = mq("select * from member where id='".$_POST['userid']."'");
                $usrid=$_SESSION['userid'];
               // $connect = mysqli_connect('localhost', 'root', '1234', 'team15') or die ("connect fail");
                $query ="select * from user_review where review_id='".$_SESSION['userid']."' order by review_no desc";
                $result = $db->query($query);
                $total = mysqli_num_rows($result);  
                   
               // $rows = mysqli_fetch_assoc($result);
                //$usrid = $rows['review_id'];
               // session_start();
              
?>
                



        <br><br>
        <h2 align=center>My review</h2>
        <table align = center>
        <thead align = "center">
        <tr>
        <td width = "50" align="center">no</td>
        <td width = "500" align = "center">title</td>
        <!-- <td width = "100" align = "center">작성자</td> -->
        
        </tr>
        </thead>
 
        <tbody>
        <?php
                while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                        if($total%2==0){
        ?>                      <tr class = "even">
                        <?php   }
                        else{
        ?>                      <tr>
                        <?php } ?>
                <td width = "50" align = "center"><?php echo $total?></td>
                <td width = "500" align = "center">
                <a href = "review_view.php?number=<?php echo $rows['review_no']?>">
                <?php echo $rows['review_title']?></td>
                  <!-- <td width = "100" align = "center"></td> -->
                
                </tr>
        <?php
                $total--;
                }
        ?>
        </tbody>
        </table>
       
        <!-- <div class = text>
        <font style="cursor: hand"onClick="location.href='./write.php'">글쓰기</font>
        </div>  -->
 
 
 
 
 
 
</body>
</html>