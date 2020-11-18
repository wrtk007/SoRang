<?php
        include "../base.php";  // including base 
        include "../config.php";  // including configuration file
        $number = $_GET['number'];
        $query = "select title, content, date, id from qna where number =$number";
        $result = mysqli_query( $db,$query);
        $rows = mysqli_fetch_assoc($result);

        $var = $rows['id'];
        $sql = "SELECT id FROM user_info WHERE user_no = $var";
        $res = mysqli_fetch_row(mysqli_query($db, $sql));
?>
        <link rel=stylesheet href='/css/common.css' type='text/css'>
        <table class="view_table" align=center>
			<tr>
					<td colspan="4" class="view_title"><?php echo $rows['title']?></td>


			</tr>
			<tr>
					<td class="view_id">id</td>
					<td class="view_id2"><?php echo $res[0]?></td>
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
                <button class="view_btn1" onclick="location.href='./qna.php'">back</button>
                
                
        </div>