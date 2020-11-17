<!DOCTYPE>
 <?php
                include "../base.php";  // including base 
                $URL = "./qna.php"; 
                if(!isset($_SESSION['userid'])) {
        ?>
				
                <script>
                        alert("You need to login");
                        location.replace("<?php echo $URL?>");
                </script>
        <?php
                }
        ?>



 
<html>
<head>
        <meta charset = 'utf-8'>
</head>
<style>
        table.table2{
                border-collapse: separate;
                border-spacing: 1px;
                text-align: left;
                line-height: 1.5;
                border-top: 1px solid #ccc;
                margin : 20px 10px;
        }
        table.table2 tr {
                 width: 50px;
                 padding: 10px;
                font-weight: bold;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
        }
        table.table2 td {
                 width: 100px;
                 padding: 10px;
                 vertical-align: top;
                 border-bottom: 1px solid #ccc;
        }
 
</style>
<body>
        <form method = "get" action = "qna_write_action.php">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white> write</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                        <tr>
                        <td>id</td>
                        <td><input type="hidden" name="review_id" value="<?=$_SESSION['userid']?>"><?=$_SESSION['userid']?></td>
                        </tr>
 
                        <tr>
                        <td>title</td>
                        <td><input type = text name = title size=60></td>
                        </tr>
 
                        <tr>
                        <td>content</td>
                        <td><textarea name = content cols=85 rows=15></textarea></td>
                        </tr>
 
                        </table>
 
                        <center>
                        <input type = "submit" value="submit">
                        </center>
                </td>
                </tr>
        </table>
        </form>
</body>
</html>