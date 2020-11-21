<?php
    include "../base.php";  // including base 
    include "../config.php";  // including configuration file
    $number = $_GET['number'];
    $query = "select title, content, date, id from qna where number =$number";
    $result = mysqli_query( $db,$query);
    $rows = mysqli_fetch_assoc($result);
?>
        <link rel=stylesheet href='/css/common.css' type='text/css'>
        <table class="view_table" align=center style="border:1px solid; width : 800px">
         <tr style="border:1px solid;">
               <td colspan="4" class="view_title"><?php echo $rows['title']?></td>
         </tr>
         <tr style="border:1px solid;">
               <td class="view_id" style="border:1px solid;">id</td>

               <?php
                    $pkid = $rows['id'];
                    $idsql = "SELECT id FROM user_info WHERE user_no=$pkid";
                    $idrun = mysqli_fetch_row(mysqli_query($db, $idsql));
               ?>

               <td class="view_id2" style="border:1px solid;"><?php echo $idrun[0]?></td>

               <td class="view_date" style="border:1px solid;">date</td>

               <td class="view_date2" style="border:1px solid;"><?php echo $rows['date']?></td>

         </tr>
    
    
         <tr>
               <td colspan="4" class="view_content" valign="top">
               <?php echo $rows['content']?></td>
         </tr>
        </table>
 
 
        <!-- MODIFY & DELETE -->
        <div class="view_btn">
                <button class="view_btn1" onclick="location.href='./myqna.php'">back</button>
                <button class="view_btn1" onclick="location.href='./myqna_modify.php?number=<?=$number?>&id=<?=$_SESSION['userno']?>'">modify</button>
            <button class="view_btn1" onclick="location.href='./myqna_delete.php?number=<?=$number?>&id=id=<?=$_SESSION['userno']?>'">delete</button>
                
        </div>
                
                
        </div>