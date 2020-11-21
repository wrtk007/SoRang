<?php  
	include '../config.php';

	function givehash($db) {
		$sql = "SELECT * FROM hashtag";
		$run = mysqli_query($db, $sql);
		while ($result = mysqli_fetch_array($run)) {
			echo '<option value="'.$result[0].'">'.$result[1].'</option>';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Sign up</title>
</head>
<body>
	<form method="post" action="member_ok.php">
		<h1>Sign up</h1>
			<fieldset>
				<legend>Input</legend>
					<table>
						<tr>
							<td>ID</td>
							<td><input type="text" size="35" name="userid" placeholder="ID"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" size="35" name="userpw" placeholder="Password"></td>
						</tr>
						<tr>
							<td>Name</td>
							<td><input type="text" size="35" name="name" placeholder="Name"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="text" name="email">@<select name="emadress"><option value="naver.com">naver.com</option><option value="nate.com">nate.com</option>
							<option value="hanmail.com">hanmail.com</option></select></td>
						</tr>
						<tr>
							<td>Favorite Hashtag1</td>
							<td>
								<select name="hash1">
									<option value="" selected disabled hidden>==Choose the hashtag==</option>
									<?php 
										givehash($db);
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Favorite Hashtag2</td>
							<td>
								<select name="hash2">
									<option value="" selected disabled hidden>==Choose the hashtag==</option>
									<?php 
										givehash($db);
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Favorite Hashtag3</td>
							<td>
								<select name="hash3">
									<option value="" selected disabled hidden>==Choose the hashtag==</option>

									<?php 
										givehash($db);
									?>
								</select>
							</td>
						</tr>
					</table>

				<input type="submit" value="Sign up" /><input type="reset" value="Rewrite" />
			
		</fieldset>
	</form>
</body>
</html>