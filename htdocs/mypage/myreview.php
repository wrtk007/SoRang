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
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="../page/main.php">Drink Review</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="../page/main.php"> Home <span class="sr-only">(current)</span></a>
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
                $query ="select * from user_review order by review_no desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);
 
                session_start();
 
                
        ?>


        <br><br>
        <h2 align=center>게시판</h2>
        <table align = center>
        <thead align = "center">
        <tr>
        <td width = "50" align="center">번호</td>
        <td width = "500" align = "center">제목</td>
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
                <a href = "view.php?number=<?php echo $rows['review_no']?>">
                <?php echo $rows['review_title']?></td>
                  <!-- <td width = "100" align = "center"></td> -->
                
                </tr>
        <?php
                $total--;
                }
        ?>
        </tbody>
        </table>
 
        <div class = text>
        <font style="cursor: hand"onClick="location.href='./write.php'">글쓰기</font>
        </div>
 
 
 
 
 
 
</body>
</html>
