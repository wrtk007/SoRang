<?php  
	$mysqli=mysqli_connect("localhost", "root", "team15", "team15");

	function givehash($mysqli) {
		$sql = "SELECT * FROM hashtag";
		$run = mysqli_query($mysqli, $sql);
		while ($result = mysqli_fetch_array($run)) {
			echo '<option value="'.$result[0].'">'.$result[1].'</option>';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>회원가입 폼</title>
</head>
<body>
	<form method="post" action="member_ok.php">
		<h1>회원가입 폼</h1>
			<fieldset>
				<legend>입력사항</legend>
					<table>
						<tr>
							<td>아이디</td>
							<td><input type="text" size="35" name="userid" placeholder="아이디"></td>
						</tr>
						<tr>
							<td>비밀번호</td>
							<td><input type="password" size="35" name="userpw" placeholder="비밀번호"></td>
						</tr>
						<tr>
							<td>이름</td>
							<td><input type="text" size="35" name="name" placeholder="이름"></td>
						</tr>
						<!--<tr>
							<td>주소</td>
							<td><input type="text" size="35" name="adress" placeholder="주소"></td>
						</tr>
						<tr>
							<td>성별</td>
							<td>남<input type="radio" name="sex" value="남"> 여<input type="radio" name="sex" value="여"></td>
						</tr>-->
						<tr>
							<td>이메일</td>
							<td><input type="text" name="email">@<select name="emadress"><option value="naver.com">naver.com</option><option value="nate.com">nate.com</option>
							<option value="hanmail.com">hanmail.com</option></select></td>
						</tr>
						<tr>
							<td>Favorite Hashtag1</td>
							<td>
								<select name="hash1">
									<option value="" selected disabled hidden>==Choose the hashtag==</option>
									<?php 
										givehash($mysqli);
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
										givehash($mysqli);
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
										givehash($mysqli);
									?>
								</select>
							</td>
						</tr>
					</table>

				<input type="submit" value="가입하기" /><input type="reset" value="다시쓰기" />
			
		</fieldset>
	</form>
</body>
</html>