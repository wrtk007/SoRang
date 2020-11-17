<?php
static $indexphp = 'http://localhost/index.php';
static $homephp = 'http://localhost/home/home.php';
static $rankphp = 'http://localhost/rank/rank_home.php';
static $snackphp = 'http://localhost/snack/snack_list.php';
static $alcoholmapphp = 'http://localhost/map/mapalcohol.php';
static $alcoholmaporiginphp = 'http://localhost/map/maporigin.php';
static $mypagephp = 'http://localhost/mypage/mypage.php';
static $logoutphp = 'http://localhost/member/logout.php';
static $myreviewphp = 'http://localhost/mypage/myreview.php';
static $myqnaphp = 'http://localhost/mypage/myqna.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TK.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Drink Review</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href=# onclick="location.href='<?php echo $homephp?>'"> Drink Review </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#" onclick="location.href='<?php echo $homephp?>'"> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="location.href='<?php echo $rankphp?>'">Rank</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" onclick="location.href='<?php echo $snackphp?>'">Snack</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Alcohol Map
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="nav-link" href="#" onclick="location.href='<?php echo $alcoholmapphp?>'">Alcohol Map</a>
                <a class="nav-link" href="#" onclick="location.href='<?php echo $alcoholmaporiginphp?>'">Alcohol Map via Origin</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                My Page
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="nav-link" href="#" onclick="location.href='<?php echo $mypagephp?>'">My Page</a>
                <a class="nav-link" href="#" onclick="location.href='<?php echo $myreviewphp?>'">My Review</a>
                <a class="nav-link" href="#" onclick="location.href='<?php echo $myqnaphp?>'">My QnA</a>
                <a class="nav-link" href="#" onclick="location.href='<?php echo $logoutphp?>'">Log out</a>

              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
            </li>
          </ul>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>