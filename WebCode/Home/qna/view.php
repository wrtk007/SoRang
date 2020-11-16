<?php
                include "base.php";  // including base 
				$connect = mysqli_connect("localhost", "team15", "team15", "team15") or die("fail");
                $number = $_GET['number'];
                session_start();
                $query = "select title, content, date, id from board where number =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>
        <link rel=stylesheet href='common.css' type='text/css'>
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
                <button class="view_btn1" onclick="location.href='./index.php'">back</button>
                <button class="view_btn1" onclick="location.href='./modify.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">modify</button>
				<button class="view_btn1" onclick="location.href='./delete.php?number=<?=$number?>&id=id=<?=$_SESSION['userid']?>'">delete</button>
                
        </div>

