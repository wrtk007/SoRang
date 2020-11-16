<!DOCTYPE html>
 <?php
      include "config.php";  // including configuration file
	  include "base.php"; //including base.php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TK.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Drink Review</title>
</head>
<body>
   
    
    <article class="container">
		<div class="jumbotron" sttle="background-color : #F8F8FF">
			
			<form name="frmdropdown" method="post" action="new1.php">
     <left>
            <h2 align="center">Alchol Map</h2>
        
            <strong> Select origin : </strong> 
            <select name="originName"> 
               <option value=""> -----------SELECT----------- </option> 
            <?php
				$originName = "SELECT DISTINCT origin from origin_box";
				
				$dd_res = mysqli_query( $mysqli,$originName);
                 
                 while($r=mysqli_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
              </select>
     <input type="submit" name="find" value="find"/> 
     <br><br>
	 
		 <form name="aldropdown" method="post" action="new1.php">
		 <left>
					
					<strong> Select alcohol type : </strong> 
					<select name="tabName"> 
					   <option value=""> -----------SELECT----------- </option> 
					<?php
						$tabName = "SELECT tab_name from alcoholtable";
						
						$tt_res = mysqli_query( $mysqli,$tabName);
						 
						 while($rt=mysqli_fetch_row($tt_res))
						 { 
							   echo "<option value='$rt[0]'> $rt[0] </option>";
						 }
					 ?>
					  </select>
			 <input type="submit" name="find" value="find"/> 
			 <br><br>
		 
   <table border="1" align = 'left'>
 <!--<tr align="center">
     <th>Alchol Name </th>      
 </tr> -->

 <?php 
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
         $des=$_POST["originName"]; 
		 $count = "SELECT count(name) From(SELECT name,origin from beer UNION SELECT name,origin from soju UNION SELECT name,origin from cocktail UNION SELECT name,origin from etc UNION SELECT name,origin from liquor UNION SELECT name,origin from wine UNION SELECT name,origin from makgeolli) as t where origin='".$des."'  group by origin order by origin";
         $aa = "Select name from(SELECT name,origin from beer UNION SELECT name,origin from soju UNION SELECT name,origin from cocktail UNION SELECT name,origin from etc UNION SELECT name,origin from liquor UNION SELECT name,origin from wine UNION SELECT name,origin from makgeolli) as t where origin='".$des."' ";   //des가 받아온값이야 
         $count_res = mysqli_query($mysqli,$count);
		 $res=mysqli_query($mysqli,$aa);
         
 
         echo "<tr><td colspan='5'></td></tr>";
		 while($rr=mysqli_fetch_row($count_res)){ //각나라에 해당하는술개수 count 
				echo "<tr>";
				echo "A total of $rr[0] were found";
				echo "<br>\n";  
		 }	
         while($r=mysqli_fetch_row($res)) //각 나라에 해당하는 술 이름 나열
         {
                 echo "<tr>";
				 echo "<td width='300' align='center'>$r[0]</td>";  
                 echo "</tr>";
        }
    }
?>

<!--<table border="1" align = 'left'>
 <tr align="center">
     <th>percentage </th>      
 </tr> -->
 
 <table border="1">
 <th>알콜 이름</th>
 <th>퍼센트</th>
<?php 
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
         $des1=$_POST["tabName"]; 
		 $cc = "SELECT origin, round((COUNT(*) / _total ) * 100,2) AS Percentege FROM $des1,(SELECT COUNT(*) AS _total FROM $des1) AS myTotal GROUP BY origin";
		 $dd = "SELECT COALESCE(origin,'ALL origin') as origin,round(AVG(score),2)as avg_score FROM $des1 GROUP BY origin with ROLLUP ";
         $cc_res = mysqli_query($mysqli,$cc);
		 $dd_res = mysqli_query($mysqli,$dd);
		 //$res=mysqli_query($mysqli,$aa);
         
 
         echo "<tr><td colspan='5'></td></tr>";
		 while($cc_rr=mysqli_fetch_row($cc_res)){ //한 종류에서 나라 비율 
				echo "<tr>
				<td width='300' align='center'>$cc_rr[0] 의 비율은 
				<td width='300' align='center'> $cc_rr[1] 이야
				<br>\n";  
		 }	?></table>
	<table border="1">
 <th>알콜 이름</th>
 <th>평점</th>	 
<?php		 
		 echo "<tr><td colspan='5'></td></tr>";
		 while($dd_rr=mysqli_fetch_row($dd_res)){ //평점
				echo "<tr>";
				echo "<td width='300' align='center'>$dd_rr[0] 의 평점은";
				echo "<td width='300' align='center'>$dd_rr[1] 이야";
				echo "<br>\n";  
		 }	
       
    }
?>
  </table>
 </center>
</form>
			

		

    </article>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>