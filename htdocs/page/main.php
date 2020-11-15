<?php include "../db.php"; ?>
<!DOCTYPE html>
<head>
	<!-- <meta charset="utf-8" />
	<title>메인페이지</title> -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TK.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Drink Review</title>
</head>
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
              <a class="nav-link" href="../snack/snack_list.php">Snack</a>
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
	if(isset($_SESSION['userid'])){
		echo "<h4>Welcome! {$_SESSION['userid']} </h4>";
	?><a href="/member/logout.php"><input type="button" value="logout" /></a>
	<?php 
		}else{
		echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
	} 
	?>
	<article class="container">
		<div class="jumbotron" sttle="background-color : #F8F8FF">
			<h1>Recommendation based on your favorite Hashtags!</h1>
			<br>
			<div class="hash1">
				<h3>Hashtag 1 : <?php ?></h3>
				<div class="row">
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title">Special title treatment</h5>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title">Special title treatment</h5>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title">Special title treatment</h5>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
				</div>	
			</div>
			<br><br><br><br><br><br>
			<div class="hash2">
				<h3>Hashtag 2 : <?php ?></h3>
				<div class="row">
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title">Special title treatment</h5>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title">Special title treatment</h5>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title">Special title treatment</h5>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
				</div>	
			</div>		
			<br><br><br><br><br><br>
			<div class="hash3">
				<h3>Hashtag 3 : <?php ?></h3>
				<div class="row">
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title">Special title treatment</h5>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title">Special title treatment</h5>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title">Special title treatment</h5>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
				</div>	
			</div>	
		</div>

		

    </article>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
