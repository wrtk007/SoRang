<!DOCTYPE>
 
<html>
<head>
        <meta charset = 'utf-8'>
        <title>Write review</title>
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
        <form method = "get" action = "write_action.php">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white> 글쓰기</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                        <tr>
                        <td>작성자</td>
                        <td><input type = text name = review_id size=20> </td>
                        </tr>
 
                        <tr>
                        <td>제목</td>
                        <td><input type = text name = review_title size=60></td>
                        </tr>
 
                        <tr>
                        <td>내용</td>
                        <td><textarea name = review cols=85 rows=15></textarea></td>
                        </tr>
 
                        <tr>
                        <td>review_score</td>
                        <td><input type = number name = review_score min="1" max="5"></td>
                        </tr>
                        <tr>
                        <td>알콜테이블</td>
                        <td><input type = number name = review_alc_table min="1" max="6" ></td>
                        </tr>
                        <tr>
                        <td>review_alc_no</td>
                        <td><input type = number name = review_alc_no min="1" max="15"></td>
                        </tr>
                        </table>
 
                        <center>
                        <input type = "submit" value="작성">
                        </center>
                </td>
                </tr>
        </table>
        </form>
</body>
</html>
 


