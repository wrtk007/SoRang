<?php     	
				include "../base.php";  // including base 
				include "../config.php";  // including configuration file
                $id = $_GET['id'];
                $number = $_GET['number'];
                $query = "select title, content, date, id from qna where number=$number";
                $result = mysqli_query( $mysqli,$query);
                $rows = mysqli_fetch_assoc($result);
 
                $title = $rows['title'];
                $content = $rows['content'];
                $usrid = $rows['id'];
 
                session_start();
 
 
                $URL = "./myqna.php";
 
                if(!isset($_SESSION['userid'])) {
        ?>              <script>
                                alert("You need to login");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
                else if($_SESSION['userid']==$usrid) {
        ?>
        <form method = "get" action = "myqna_modify_action.php">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white> modify</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                <tr>
                        <td>id</td>
                        <td><input type="hidden" name="id" value="<?=$_SESSION['userid']?>"><?=$_SESSION['userid']?></td>
                        </tr>
 
                        <tr>
                        <td>title</td>
                        <td><input type = text name = title size=60 value="<?=$title?>"></td>
                        </tr>
 
                        <tr>
                        <td>content</td>
                        <td><textarea name = content cols=85 rows=15><?=$content?></textarea></td>
                        </tr>
 
                        </table>
 
                        <center>
                        <input type="hidden" name="number" value="<?=$number?>">
                        <input type = "submit" value="write">
                        </center>
                </td>
                </tr>
        </table>
        <?php   }
                else {
        ?>              <script>
                                alert("You need to login");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
        ?>
