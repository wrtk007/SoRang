<?php   
include "config.php"; ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Log in</title>
<link rel="stylesheet" type="text/css" href="/css/common.css" />
</head>
<body>
	<div id="login_box">
		<h1>LOG IN</h1>							
			<form method="post" action="./member/member/login_ok.php">
				<table align="center" border="0" cellspacing="0" width="300">
        			<tr>
            			<td width="130" colspan="1"> 
                		<input type="text" name="userid" class="inph">
            		</td>
            		<td rowspan="2" align="center" width="100" > 
                		<button type="submit" id="btn" >Log in</button>
            		</td>
        		</tr>
        		<tr>
            		<td width="130" colspan="1"> 
               		<input type="password" name="userpw" class="inph">
            	</td>
        	</tr>
        	<tr>
           		<td colspan="3" align="center" class="mem"> 
              	<a href="/member/member/member.php">Sign up?</a>
           </td>
        </tr>
    </table>
  </form>
</div>
</body>
</html>