 <?php
    include "../base.php"; //including base.php
  	include "../config.php";  // including configuration file
 	if(mysqli_connect_error()){

	  printf("Connection failed : %s\n", mysqli_connect_error());
  
	  }  
	
?>
    <article class="container">
		<div class="jumbotron" sttle="background-color : #F8F8FF"> 
		<form name="aldropdown" method="post" action="mapalcohol.php">
		<center>
			<h2 align="center">Alchol Map</h2>
		    <strong> Select alcohol type : </strong> 
			<select name="tabName"> 
			<option value=""> -----------SELECT----------- </option> 
			<?php
						$tabName = "select tab_name from alcoholtable";
						
						$tt_res = mysqli_query($db,$tabName);
						 
						 while($rt=mysqli_fetch_row($tt_res))
						 { 
							   echo "<option value='$rt[0]'> $rt[0] </option>";
						 }
			?>
			</select>
			<input type="submit" name="find" value="find"/> 
			<br><br>
		 
 
 	<table border="1">
 <tr align="center">
     <th align="center">Origin</th>
	 <th align="center">Percentage(%)</th>     
 </tr> 
 		
		<?php 
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
         $des1=$_POST["tabName"]; 
		 $cc = "select origin, round((COUNT(*) / _total ) * 100,2) as Percentege from $des1,(select COUNT(*) AS _total FROM $des1) as myTotal GROUP BY origin";
		 $dd = "select COALESCE(origin,'ALL origin') as origin,round(AVG(score),2)as avg_score FROM $des1 GROUP BY origin with ROLLUP ";
         $cc_res = mysqli_query($db,$cc);
		 $dd_res = mysqli_query($db,$dd);
		 
         
 
         echo "<tr><td colspan='5'></td></tr>";
		 while($cc_rr=mysqli_fetch_row($cc_res)){ //한 종류에서 나라 비율 
				echo "<tr>
				<td width='300' align='center'>$cc_rr[0]
				<td width='300' align='center'> $cc_rr[1] 
				<br>\n";  
		 }	?></table>
	<table border="1">
 <tr align="center">
     <th align="center">Origin</th>
	 <th align="center">Average Score</th>	     
 </tr> 
 
<?php		 
		 echo "<tr><td colspan='5'></td></tr>";
		 while($dd_rr=mysqli_fetch_row($dd_res)){ //평점
				echo "<tr>";
				echo "<td width='300' align='center'>$dd_rr[0] ";
				echo "<td width='300' align='center'>$dd_rr[1] ";
				echo "<br>\n";  
		 }	
       
    }
?>
  </table>
 </center>
</form>
			

		

    </article>

