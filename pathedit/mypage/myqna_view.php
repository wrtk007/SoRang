<?php
                include "../base.php";  // including base 
				include "../config.php";  // including configuration file
                $number = $_GET['number'];
                session_start();
                $query = "select title, content, date, id from qna where number =$number";
                $result = mysqli_query( $mysqli,$query);
                $rows = mysqli_fetch_assoc($result);
        ?>
        <link rel=stylesheet href='/css/common.css' type='text/css'>
        <table class="view_table" align=center>
			<tr>
					<td colspan="4" class="view_title"><?php echo $rows['title']?></td>


			</tr>
			<tr>
					<td class="view_id">id</td>
					<td class="view_id2"><?php echo $rows['id']?></td>
					<td class="view_date">date</td>
					<td class="view_date2"><?php echo $rows['date']?></td>
			</tr>
	 
	 
			<tr>
					<td colspan="4" class="view_content" valign="top">
					<?php echo $rows['content']?></td>
			</tr>
        </table>
 
 
        <!-- MODIFY & DELETE -->
        <div class="view_btn">
                <button class="view_btn1" onclick="location.href='./myqna.php'">back</button>
                <button class="view_btn1" onclick="location.href='./myqna_modify.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">modify</button>
				<button class="view_btn1" onclick="location.href='./myqna_delete.php?number=<?=$number?>&id=id=<?=$_SESSION['userid']?>'">delete</button>
                
        </div>
                
                
        </div>