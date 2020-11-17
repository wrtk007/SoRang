<?php
    // ini_set('display_errors','0');
    include '../config.php';  
    
    $userid = $_SESSION['userid'];

    if(!isset($_SESSION['userid'])){
        echo "<script> alert('Please, Log in first.');
                location.replace('../index.php')</script>";
        exit();
    }

    include '../base.php';

    $userno = $_SESSION['userno'];
	$username = $_SESSION['username'];
    $useremail = $_SESSION['useremail'];

    static $hash1;
    static $hash2;
    static $hash3;

    $Message = 'Choose the hashtag';

    $hashsql = "SELECT taste_hash1, taste_hash2, taste_hash3 FROM user_info WHERE user_no=$userno IS NOT NULL";
	$hashrun = mysqli_query($db,$hashsql);

	while($hashresult = mysqli_fetch_array($hashrun)) {
		$hash1 = $hashresult[0];
		$hash2 = $hashresult[1];
		$hash3 = $hashresult[2];
    }

    $hash1sql = "SELECT hashtag_name FROM hashtag WHERE hashtag_no = '$hash1'";
	$hash2sql = "SELECT hashtag_name FROM hashtag WHERE hashtag_no = '$hash2'";
	$hash3sql = "SELECT hashtag_name FROM hashtag WHERE hashtag_no = '$hash3'";

	$hashrun = mysqli_query($db,$hash1sql);
    $hash1txt = mysqli_fetch_row($hashrun);

	$hashrun = mysqli_query($db,$hash2sql);
    $hash2txt = mysqli_fetch_row($hashrun);
    
	$hashrun = mysqli_query($db,$hash3sql);
    $hash3txt = mysqli_fetch_row($hashrun);
    
    $userinfo = "SELECT * FROM user_info WHERE user_no=$userno;";
    $userinforun = mysqli_query($db, $userinfo);
    $userinforesult = mysqli_fetch_array($userinforun);

    function givehash($db) {
        $sql = "SELECT * FROM hashtag";
        $run = mysqli_query($db, $sql);
        while ($result = mysqli_fetch_array($run)) {
            if ($result[0] == NULL || $result[1] == NULL) {
                echo '<option value="'.$result[0].'">'.$result[1].'</option>';
            }
            else {
                echo '<option value="'.$result[0].'">'.$result[1].'</option>';
            }
        }
    }

    function deletehash($db,$hash,$userno) {
        $sql = "UPDATE user_info SET $hash=NULL WHERE user_no=$userno";
        mysqli_query($db, $sql);
    }
?>


<article class="container">
<div class="jumbotron" style="background-color : #F8F8FF">
	<div class="showinfo">
        <div class="showid">ID : <?php echo $userid?></div>
        <div class="showname">Name : <?php echo $username?></div>
        <div class="showemail">E-mail : <?php echo $useremail?></div>
        <hr>
        <div class="changepw">
            <form method="POST" action="changepw.php">
                <div style="width:500px;">
                <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
                <tr class="tableheader">
                <td colspan="2">Change Password</td>
                </tr>
                <tr>
                <td width="40%"><label>Current Password</label></td>
                <td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
                </tr>
                <tr>
                <td><label>New Password</label></td>
                <td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
                </tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
                </tr>
                <tr>
                <td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
                </tr>
                </table>
                </div> 
            </form>
        </div>
    </div>
    <hr>
    <div class="hashtag">
        <form action="changehash.php" method="POST">
            Hashtag1 : 
            <select name="hash1" id="hash1">
                <option value="<?php echo $hash1;?>" selected> 
                    <?php 
                        if ($hash1==0 || $hash1 == NULL) {
                            echo $Message;
                        } 
                        else {
                            echo $hash1txt[0];
                        }
                    ?>
                </option>
                <?php 
                    givehash($db);
                ?>
            </select>


            <br>
            
            Hashtag2 :
            <select name="hash2" id="hash2">
                <option value="<?php echo $hash2;?>" selected> 
                <?php
                    if ($hash2 == 0 || $hash2 == NULL) { 
                        echo $Message;
                    }
                    else {
                        echo $hash2txt[0];
                    }
                ?> 
                </option>
                <?php 
                    givehash($db);
                ?>
            </select>

            <br>

            Hashtag3 :
            <select name="hash3" id="hash3">
                <option value="<?php echo $hash3;?>" selected> 
                <?php 
                if ($hash3 == 0 || $hash3==NULL)  {
                    echo $Message;
                }
                else {
                    echo $hash3txt[0];
                }
                ?> </option>
                <?php 
                    givehash($db);
                ?>
            </select>
            <br>
            <input type="submit" value="End the hashtag edit"> </input>
        </form>
    </div>
    <hr>
    <div class="signout">
        <form action="signout.php" method="POST">
                <input type="submit" value="DO YOU REALLY WANT TO SIGN OUT?">
        </form>
    </div>
</div>
</article> 
