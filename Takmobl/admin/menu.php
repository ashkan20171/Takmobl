<!DOCTYPE html>
<html>
<head>
	<title>TakMobl</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../style/panel.css">
</head>
<body>
<div class="menu">
	<ul>
		<li><a href="panel.php">پنل</a></li>
		<li><a href="specialpostmanage.php">مدیریت پست های ویژه</a></li>
		<li><a href="#">مدیریت پست</a>
			<ul>
				<li><a href="sendpost.php">ارسال پست جدید</a></li>
				<li><a href="postmanage.php">مدیریت پست های قبلی</a></li>
			</ul>
		</li>
		<li><a href="setting.php">تنظیمات</a></li>
		<li><a href="show.php">مدیریت اجزا</a></li>
		<li><a href="../index.php">خانه</a></li>
		<li><a href=<?php echo "../check.php?exit=3050" ?> >خروج</a></li>
	</ul>
</div><!-- menu -->
<?php
include ("../config.php");
?>