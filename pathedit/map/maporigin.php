<!DOCTYPE html>
 <?php
    include "../base.php"; //including base.php
  	include "../config.php";  // including configuration file
    if(mysqli_connect_error()){

        printf("Connection failed : %s\n", mysqli_connect_error());
    
        }
	
?>
<article class="container">
		<div class="jumbotron" sttle="background-color : #F8F8FF">
			
			<form name="frmdropdown" method="post" action="maporigin.php">
     		<center>
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
	 

		 
   <table border="1" align = 'center'>
 <tr align="center">
     <th>Alchol Name </th>      
 </tr> 

 <?php 
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
        $des=$_POST["originName"]; 
        $count = "SELECT count(name) From(SELECT name,origin from beer UNION SELECT name,origin from soju UNION SELECT name,origin from cocktail UNION SELECT name,origin from etc UNION SELECT name,origin from liquor UNION SELECT name,origin from wine UNION SELECT name,origin from makgeolli) as t where origin='".$des."'  group by origin order by origin";
        $aa = "SELECT name From(SELECT name,origin from beer UNION SELECT name,origin from soju UNION SELECT name,origin from cocktail UNION SELECT name,origin from etc UNION SELECT name,origin from liquor UNION SELECT name,origin from wine UNION SELECT name,origin from makgeolli) as t where origin='".$des."' ";   //des가 받아온값이야          
        $count_res = mysqli_query($mysqli,$count);
		$res=mysqli_query($mysqli,$aa);
        
        echo "<h4>$des</h4>";
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

  </table>
 </center>
</form>
			

		

</article>
