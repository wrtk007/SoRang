<?php 
	include 'base.php';
	$mysqli=mysqli_connect("localhost", "root", "team15", "team15");
	static $hash1;
	static $hash2;
	static $hash3;

	static $tab1;
	static $tab2;
	static $tab3;

	static $hasharr;
	static $tabarr=[];

	// select user's favorite hash 
	$hashsql = "SELECT taste_hash1, taste_hash2, taste_hash3 FROM user_info WHERE user_no=1 IS NOT NULL";
	$hashrun = mysqli_query($mysqli,$hashsql);

	while($hashresult = mysqli_fetch_array($hashrun)) {
		$hash1 = $hashresult[0];
		$hash2 = $hashresult[1];
		$hash3 = $hashresult[2];
	}

	$hasharr = [$hash1, $hash2, $hash3];
	
	// if user don't have favorite tag, then choose random tag
	$newhashsql = "SELECT hashtag_name FROM hashtag WHERE hashtag_name NOT IN ('$hash1', '$hash2', '$hash3')";
	$newhashrun = mysqli_query($mysqli,$newhashsql);

	while($newhashresult = mysqli_fetch_array($newhashrun)) {
		$i = 0;
		if ($hash1 == NULL) {
			$hash1 = $newhashresult[$i];
			$i++;
		} else if ($hash2 == NULL ) {
			$hash2 = $newhashresult[$i];
			$i++;
		} else {
			$hash3 = $newhashresult[$i];
			$i++;
		}
	}

	//select random tab
	$tabsql = "SELECT tab_name FROM alcoholtable ORDER BY RAND() LIMIT 3";
	$tabrun = mysqli_query($mysqli, $tabsql);
	while ($tab_name = mysqli_fetch_array($tabrun)) {
		$tabarr[] = $tab_name[0];
	}
	echo '여기 어디여';
	echo $tabarr;

	$hasharr = [$hash1, $hash2, $hash3];

	for($j=0; $j<3; $j++){
		$resultarr = [];
		$alcsql = "SELECT no, name, exp FROM $tabarr[$n] WHERE '$hasharr[$n]' IN ('$hash1', '$hash2', '$hash3') ORDER BY RAND() LIMIT 3";
		echo $alcsql;
		$alcrun = mysqli_query($mysqli, $alcsql);
		while (	$alcresult = mysqli_fetch_array($alcrun)) {
			$m=0;
			$name = $alcresult['name'];
			$expl = $alcresult['exp'];
			$resultarr[$m] = [$name, $expl];
			$m++;
		}}

	
	
?>
    <article class="container">
		<div class="jumbotron" style="background-color : #F8F8FF">
			<h1>Recommendation based on your favorite Hashtags!</h1>
			<br>
			<div class="hash1">
				<h3>Hashtag 1 : <?php echo $hash1; ?></h3>
				<div class="row">
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title"> <?php echo $resultarr1[0]; ?> </h5>
							<p class="card-text"> <?php echo $resultarr1[1]; ?> </p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
						<?php 

						?>
							<h5 class="card-title"><?php echo $resultarr2[0]; ?></h5>
							<p class="card-text"><?php echo $resultarr2[1]; ?></p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title"><?php echo $resultarr3[0]; ?></h5>
							<p class="card-text"><?php echo $resultarr3[1]; ?></p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
				</div>	
			</div>
			<br><br><br><br><br><br>
			<div class="hash2">
				<h3>Hashtag 2 : <?php echo $hash2; ?></h3>
				<?php 
					$tab1 = tab($mysqli);
					$tab2 = tab($mysqli);
					$tab3 = tab($mysqli);

					$resultarr1 = result($mysqli, $tab1, $hashresult[1]);
					$resultarr2 = result($mysqli, $tab2, $hashresult[1]);
					$resultarr3 = result($mysqli, $tab3, $hashresult[1]);
				?>
				<div class="row">
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title"> <?php echo $resultarr1[0]; ?> </h5>
							<p class="card-text"> <?php echo $resultarr1[1]; ?> </p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
						<?php 

						?>
							<h5 class="card-title"><?php echo $resultarr2[0]; ?></h5>
							<p class="card-text"><?php echo $resultarr2[1]; ?></p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title"><?php echo $resultarr3[0]; ?></h5>
							<p class="card-text"><?php echo $resultarr3[1]; ?></p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
				</div>	
			</div>		
			<br><br><br><br><br><br>
			<div class="hash3">
				<h3>Hashtag 3 : <?php echo $hash3; ?></h3>
				<?php 
					$tab1 = tab($mysqli);
					$tab2 = tab($mysqli);
					$tab3 = tab($mysqli);

					$resultarr1 = result($mysqli, $tab1, $hashresult[2]);
					$resultarr2 = result($mysqli, $tab2, $hashresult[2]);
					$resultarr3 = result($mysqli, $tab3, $hashresult[2]);
				?>
				<div class="row">
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title"> <?php echo $resultarr1[0]; ?> </h5>
							<p class="card-text"> <?php echo $resultarr1[1]; ?> </p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
						<?php 

						?>
							<h5 class="card-title"><?php echo $resultarr2[0]; ?></h5>
							<p class="card-text"><?php echo $resultarr2[1]; ?></p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title"><?php echo $resultarr3[0]; ?></h5>
							<p class="card-text"><?php echo $resultarr3[1]; ?></p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
					</div>
				</div>	
			</div>	
		</div>

		

    </article>