<?php 
	include '../base.php';
	include '../config.php';
	$userid = $_SESSION['userid'];

	static $hash1;
	$hash1 = $_SESSION['hash1'];
	static $hash2;
	$hash2 = $_SESSION['hash2'];
	static $hash3;
	$hash3 = $_SESSION['hash3'];


	static $tab1;
	static $tab2;
	static $tab3;

	static $hasharr;
	static $hashnoarr;
	static $tabarr;

	$hashnoarr = [$hash1, $hash2, $hash3];

	// if user doesn't choose own favorite hashtag, then choose randomly
	$newhashsql = "SELECT hashtag_no FROM hashtag WHERE hashtag_no NOT IN ('$hash1', '$hash2', '$hash3')";
	$newhashrun = mysqli_query($db,$newhashsql);

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

	$hash1sql = "SELECT hashtag_name FROM hashtag WHERE hashtag_no = '$hash1'";
	$hash2sql = "SELECT hashtag_name FROM hashtag WHERE hashtag_no = '$hash2'";
	$hash3sql = "SELECT hashtag_name FROM hashtag WHERE hashtag_no = '$hash3'";

	$hashrun = mysqli_query($db,$hash1sql);
	$hash1 = mysqli_fetch_row($hashrun);
	$hashrun = mysqli_query($db,$hash2sql);
	$hash2 = mysqli_fetch_row($hashrun);
	$hashrun = mysqli_query($db,$hash3sql);
	$hash3 = mysqli_fetch_row($hashrun);


	$hasharr = [$hash1[0], $hash2[0], $hash3[0]];

	//choose random alchol type
	$tabsql = "SELECT tab_name FROM alcoholtable ORDER BY RAND() LIMIT 3";
	$tabrun = mysqli_query($db, $tabsql);
	while ($tab_name = mysqli_fetch_row($tabrun)) {
		$tabarr[] = $tab_name[0];
	}


echo'
<article class="container">
<div class="jumbotron" style="background-color : #F8F8FF">
	<h2>Recommendation based on your favorite Hashtags!</h2>
	<br>
';
for ($a=1; $a<4; $a++){
	$b = $a-1;
		echo '
	<div class="hash'.$a.'">
		<h3>Hashtag '.$a.' : '.$hasharr[$b].'</h3>
		<div class="row">';
		for($c=0; $c<3; $c++){
			$resultarr = [];
			$alcsql = "SELECT no, name, exp FROM $tabarr[$b] WHERE '$hashnoarr[$b]' IN (hashtag1, hashtag2, hashtag3) ORDER BY RAND() LIMIT 3";
			$alcrun = mysqli_query($db, $alcsql);
			while (	$alcresult = mysqli_fetch_array($alcrun)) {
				$d=0;
				$name = $alcresult['name'];
				$expl = $alcresult['exp'];
				$resultarr[$d] = [$name, $expl];
				$d++;
			}
			$d=0;
		 echo'
	 			<div class="col-sm-4" id=".result+'.$d.'.">
				<div class="card">
				<div class="card-body">
					<h5 class="card-title">'.$resultarr[$d][0].'</h5>
					<p class="card-text"> '.$resultarr[$d][1].' </p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
				</div>
			</div>';  
			$d++;
		}
			echo '
		</div>	
	</div>
	<br><br><br><br><br><br>	
	';
}
	
?>
