<!DOCTYPE html>
<html>
<head>
	<title>TakMobl</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="loginbox">
	<p>صفحه ورود</p>

<?php
if (isset($_GET["empty"])) {
	echo "<center><font color=red>تمام فیلد ها باید پر باشد.</font></center>";
}
if (isset($_GET["error"])) {
	echo "<center><font color=red>نام کاربری یا رمز عبور نادرست می باشد.</font></center>";
}

?>	
		<form method="post" action="check.php">
			<label>نام کاربردی</label>
			<input type="text" name="username" placeholder="UserName">
			<label>رمز عبور</label>
			<input type="password" name="password" placeholder="Password">
			<input type="submit" value="ورود" name="btnlogin">
		</form>
		<a href="index.php">بازگشت به خانه</a>
</div><!-- loginbox -->
</body>
</html>