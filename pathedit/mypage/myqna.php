<?php         
        include "../base.php";  // including base 
        include "../config.php";  // including configuration file
      ?>

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

<?php         

        $userid = $_SESSION['userid'];
        $userno = $_SESSION['userno'];
        $query ="select * from qna where id = $userno order by date ";
        $result = mysqli_query( $db,$query);
                
        $total = mysqli_num_rows($result);
 
        ?>
        <h2 align=center>my Q&A</h2>
        <table align = center>
        <thead align = "center">
        <tr>
        <td width = "50" align="center">no</td>
        <td width = "500" align = "center">title</td>
        <td width = "100" align = "center">id</td>
        <td width = "200" align = "center">date</td>
      
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
                <a href = "./myqna_view.php?number=<?php echo $rows['number']?>">
                <?php echo $rows['title']?></td>
                  <td width = "100" align = "center"><?php echo $userid?></td>
                <td width = "200" align = "center"><?php echo $rows['date']?></td>
                
                </tr>
        <?php
                $total--;
                }
        ?>
        </tbody>
        </table>
 
       
 
 
 
 
</body>
</html>