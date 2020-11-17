
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
 <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
         <a class="navbar-brand" href="#">Drink Review</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
           <ul class="navbar-nav">
             <li class="nav-item active">
               <a class="nav-link" href="main.php"> Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">Rank</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="../snack/snack_home.php">Snack</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">Alcohol Map</a>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 My Page
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                 <a class="dropdown-item" href="#">Log in / Log out</a>
                 <a class="dropdown-item" href="#">Sign up</a>
                 <a class="dropdown-item" href="../mypage/myreview.php">My Page</a>
               </div>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">Help</a>
             </li>
           </ul>
         </div>
     </nav>
     <?php    
            $connect = mysqli_connect('localhost', 'root', '1234', 'team15') or die ("connect fail");
            $id = $_GET['id'];
            $number = $_GET['number'];
            $query = "select review_title, review, review_id from user_review where review_no =$number";
            $result = $connect->query($query);
            $rows = mysqli_fetch_assoc($result);
 
            $title = $rows['review_title'];
            $content = $rows['review'];
            $usrid = $rows['review_id'];
 
            session_start();
 
 
            $URL = "./myreview.php";
 
            
                if(!isset($_SESSION['userid'])) {
        ?>              <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
                else if($_SESSION['userid']==$usrid) {
        ?>
        <form method = "get" action = "modify_action.php">
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
                        <input type = "submit" value="작성">
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