<?php 
	include '../base.php';
	include '../config.php';

	$userid = $_SESSION['userid'];
	$userno = $_SESSION['userno'];

	// select user's pk(id) and favorite 3 hashtags from user_info table
	// and use join to find the name of hashtag
	$var=0;
	$sql = "SELECT `user_info`.`id`,`user_info`.`taste_hash1`, `user_info`.`taste_hash2`, `user_info`.`taste_hash3`, `hashtag`.* \n"

    . "FROM `user_info` \n"

    . "LEFT JOIN `hashtag` \n"

    . "ON `user_info`.`taste_hash1` = `hashtag`.`hashtag_no` \n"

    . "	OR `user_info`.`taste_hash2`=`hashtag`.`hashtag_no`\n"

    . "	OR `user_info`.`taste_hash3`=`hashtag`.`hashtag_no` \n"

    . "WHERE `user_no`=$userno";
	$runsql = mysqli_query($db, $sql);
	while ($result = mysqli_fetch_array($runsql)) {
		$newid = $result[0]; //user's pk
		$newhash1 = $result[1]; //taste_hash1 from user_info
		$newhash2 = $result[2]; //taste_hash2 from user_info
		$newhash3 = $result[3]; //taste_hash3 from user_info
		$newhashnamearr[$var] = $result[5]; //hashtag name array
		$var++;
	}

	$newhashnoarr = [$newhash1, $newhash2, $newhash3]; //hashtag no(pk) array

	//if user doesn't have favorite hashtag, then recommend random hashtag
	for ($i = 0; $i<3; $i++) {
		$newhashsql = "SELECT * FROM hashtag WHERE hashtag_no NOT IN ($newhash1, $newhash2, $newhash3) ORDER BY RAND() LIMIT 1";
		$newhashrun = mysqli_query($db,$newhashsql);
		while($newhashresult = mysqli_fetch_array($newhashrun)){
			for ($j=0; $j<3; $j++) {
				if ($newhashnoarr[$j] == 0 || $newhashnoarr[$j] == NULL) {
					$newhashnoarr[$j]= $newhashresult[0];
					if ($newhashnamearr[$i]==NULL || $newhashnamearr[$i] == "None") {
						$newhashnamearr[$i] = $newhashresult[1];
					}
				}
			}
		}
	}

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
		<h3>Hashtag '.$a.' : '.$newhashnamearr[$b].'</h3>
		<div class="row">';
		for($c=0; $c<3; $c++){
			$resultarr = [];
			$alcsql = "SELECT name, exp FROM $tabarr[$b] WHERE $newhashnoarr[$b] IN ($newhash1, $newhash2, $newhash3) ORDER BY RAND() LIMIT 3";
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
