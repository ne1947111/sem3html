<!DOCTYPE html>
<html>
    <form class="form-horizontal login-form" method="post">
        <div class="form-group relative">
            <input name="email" class="form-control input-lg" id="login_username" placeholder="E-mail Address" required="" type="email"> <i class="fa fa-user"></i>
        </div>
        <div class="form-group relative">
            <input name="password" class="form-control input-lg" id="login_password" placeholder="Password" required="" type="password"> <i class="fa fa-lock"></i>
        </div>
        <div class="form-group">
            <button name="save" class="btn btn-success btn-lg btn-block">Login</button>
        </div>
        <div class="checkbox checkbox-success">
            <input id="stay-sign" type="checkbox">
        <label for="stay-sign">Stay signed in</label>
        </div>
        <hr />
        <div class="text-center">
            <label><a href="#">Forgot your password?</a></label>
        </div>
    </form>
</html>

<?php
include 'connect.php';
if (isset($_POST['save'])) {
    echo "<script type='javascript'> console.log('Hai'); </script>";
	$eml=$_POST['email'];
	$pwd=$_POST['password'];
	$qry=mysqli_query($con,"SELECT * FROM `users` WHERE `uemail`='$eml' and `upassword`='$pwd'")or die(mysqli_error($con));
	$rows=mysqli_num_rows($qry);
	$fetch=mysqli_fetch_array($qry);
	if ($rows == 1) {
		session_start();
        $_SESSION['ssid']= $fetch['eml'];
        $_SESSION['username']=$eml;
        header("Location: test.php");
	}
}
?>