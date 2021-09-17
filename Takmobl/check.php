<?php
session_start();
include ("config.php");
#---- ADMIN LOGIN
if (isset($_POST["btnlogin"])) 
{
	
	if (empty($_POST["username"]) || empty($_POST["password"])) {
		header("location:login.php?empty=1010");
		exit;
	}
	$useradmin=$_POST["username"];
	$passadmin=$_POST["password"];

	$admin="select * from `takmobl` . `admin` where username='$useradmin' && password='$passadmin'; ";
	$adminresult=mysql_query($admin);
	$adminfetch=mysql_fetch_assoc($adminresult);
	$adminrows=mysql_num_rows($adminresult);
	if ($adminrows>0) 
	{
		setcookie("admin",$adminfetch["fname"],time()+(86400*7));
		header("location:admin/panel.php?adminid=".$adminfetch["id"]);
		exit;
	}
	else 
	{
		header("location:login.php?error=2020");
		exit;
	}
}
#----- ADMIN EXIT
if (isset($_GET["exit"])) {
	setcookie("admin","مدیر وبسایت",time()-(86400*7));
	header("location:index.php");
	exit;
}
#----- Send Post
if(isset($_POST["sendpostbtn"]))
{
	if (empty($_POST["title"]) ||
		empty($_POST["thumb"]) ||
		empty($_POST["content"])) 
	{
		header("location:admin/sendpost.php?empty=1010");
		exit;
	}
	else
	{
		$posttitle=$_POST["title"];
		$postthumb=$_POST["thumb"];
		$postcontent=$_POST["content"];
		
		$sendpostsql="INSERT INTO `takmobl`.`post` (`id` ,`title` ,`src` ,`content`)VALUES(NULL , '".$posttitle."', '".$postthumb."', '".$postcontent."');";
		$sendpostquery=mysql_query($sendpostsql);
		if ($sendpostquery) 
		{
			header("location:admin/sendpost.php?ok=1010");
			exit;
		}
		else
		{
			header("location:admin/sendpost.php?error=1010");
			exit;
		}
	}
}
#----- Post Delete
if (isset($_GET["postid"])) 
{
	$postdelid=$_GET["postid"];
	$postdel="DELETE FROM `takmobl`.`post` WHERE `post`.`id` =$postdelid";
	$postdelquery=mysql_query($postdel);
	if ($postdelquery) 
	{
		header("location:admin/postmanage.php?okdel=1010");
		exit;
	}
	else
	{
		header("location:admin/postmanage.php?nodel=1010");
		exit;
	}
}
#--------- update Post Id
if (isset($_POST["updatepostbtn"])) 
{
	if (empty($_POST["title"]) ||
		empty($_POST["thumb"]) ||
		empty($_POST["content"])) 
	{
		header("location:admin/postmanage.php?empty=1010");
		exit;
	}
	else
	{
		$updatepost=$_POST["updatepostid"];
		$updatepost="UPDATE `takmobl`.`post` SET `title` = '".$_POST["title"]."', `src` = '".$_POST["thumb"]."', `content` = '".$_POST["content"]."' WHERE `post`.`id` = $updatepost;";
		$updatepostresult=mysql_query($updatepost);
		if ($updatepostresult) 
		{
			header("location:admin/postmanage.php?okupdate=1050");
			exit;
		}
		else
		{
			header("location:admin/postmanage.php?noupdate=1050");
			exit;
		}
	}	
}
#----- TOP MENU
if (isset($_POST["topmnubtn"])) 
{
	if (empty($_POST["topmnutitle"]) || empty($_POST["topmnulink"])) 
	{
		header("location:admin/setting.php?emptytopmnu=15859");
		exit;
	}
	$mnu="INSERT INTO  `takmobl`.`menu` (`id` ,`title` ,`link`)VALUES (NULL ,  '".$_POST["topmnutitle"]."',  '".$_POST["topmnulink"]."');";
	$mnuresult=mysql_query($mnu);
	if($mnuresult)
	{
		header("location:admin/setting.php?oktopmnu=15859");
		exit;
	}
	else
	{
		header("location:admin/setting.php?errortopmnu=15859");
		exit;
	}
}
#----- TOP ADS
if (isset($_POST["topadsbtn"])) 
{
	if (empty($_POST["adsimg"]) || empty($_POST["adslink"])) 
	{
		header("location:admin/setting.php?emptytopads=15859");
		exit;
	}
	$topads="INSERT INTO  `takmobl`.`topads` (`id` ,`src` ,`link`)VALUES (NULL ,  '".$_POST["adsimg"]."',  '".$_POST["adslink"]."');";
	$topadsresult=mysql_query($topads);
	if($topadsresult)
	{
		header("location:admin/setting.php?oktopads=15859");
		exit;
	}
	else
	{
		header("location:admin/setting.php?errortopads=15859");
		exit;
	}
}
#----- BOTTOM ADS
if (isset($_POST["btmAdsbtn"])) 
{
	if (empty($_POST["adsimg"]) || empty($_POST["adslink"])) 
	{
		header("location:admin/setting.php?emptybtmads=15859");
		exit;
	}
	$topads="INSERT INTO  `takmobl`.`btmads` (`id` ,`src` ,`link`)VALUES (NULL ,  '".$_POST["adsimg"]."',  '".$_POST["adslink"]."');";
	$topadsresult=mysql_query($topads);
	if($topadsresult)
	{
		header("location:admin/setting.php?okbtmads=15859");
		exit;
	}
	else
	{
		header("location:admin/setting.php?errorbtmads=15859");
		exit;
	}
}
#----- Slider
if (isset($_POST["sliderbtn"])) 
{
	if (empty($_POST["sliderimg"]) || empty($_POST["slidertitle"])) 
	{
		header("location:admin/setting.php?emptyslider=15859");
		exit;
	}
	$slider="INSERT INTO  `takmobl`.`slider` (`id` ,`src` ,`title`)VALUES (NULL ,  '".$_POST["sliderimg"]."',  '".$_POST["slidertitle"]."');";
	$sliderresult=mysql_query($slider);
	if($sliderresult)
	{
		header("location:admin/setting.php?okslider=15859");
		exit;
	}
	else
	{
		header("location:admin/setting.php?errorslider=15859");
		exit;
	}
}
#----- Send Special Post
if(isset($_POST["specialpostbtn"]))
{
	if (empty($_POST["specialposttitle"]) ||
		empty($_POST["specialpostimg"]) ||
		empty($_POST["specialpostontent"])) 
	{
		header("location:admin/specialpostmanage.php?empty=1010");
		exit;
	}
	else
	{
		$specialposttitle=$_POST["specialposttitle"];
		$specialpostthumb=$_POST["specialpostimg"];
		$specialpostcontent=$_POST["specialpostontent"];
		
		$specialsendpostsql="INSERT INTO `takmobl`.`specialpost` (`id` ,`title` ,`src` ,`content`)VALUES(NULL , '".$specialposttitle."', '".$specialpostthumb."', '".$specialpostcontent."');";
		$specialsendpostquery=mysql_query($specialsendpostsql);
		if ($specialsendpostquery) 
		{
			header("location:admin/specialpostmanage.php?ok=1010");
			exit;
		}
		else
		{
			header("location:admin/specialpostmanage.php?error=1010");
			exit;
		}
	}
}
#----- Menu Delete
if (isset($_GET["mnuid"])) 
{
	$postdelid=$_GET["mnuid"];
	$mnu="DELETE FROM `takmobl`.`menu` WHERE `menu`.`id` =$postdelid";
	$mnuresult=mysql_query($mnu);
	if ($mnuresult) 
	{
		header("location:admin/show.php?okdelmnu=1010");
		exit;
	}
	else
	{
		header("location:admin/show.php?nodelmnu=1010");
		exit;
	}
}
#----- Ads Delete
if (isset($_GET["adsid"])) 
{
	$adsdelid=$_GET["adsid"];
	$ads="DELETE FROM `takmobl`.`topads` WHERE `topads`.`id` =$adsdelid";
	$adsresult=mysql_query($ads);
	if ($adsresult) 
	{
		header("location:admin/show.php?okdeltopads=1010");
		exit;
	}
	else
	{
		header("location:admin/show.php?nodeltopads=1010");
		exit;
	}
}
#----- Slider Delete
if (isset($_GET["sliderid"])) 
{
	$sliderdelid=$_GET["sliderid"];
	$slider="DELETE FROM `takmobl`.`slider` WHERE `slider`.`id` =$sliderdelid";
	$sliderresult=mysql_query($slider);
	if ($sliderresult) 
	{
		header("location:admin/show.php?okdelslider=1010");
		exit;
	}
	else
	{
		header("location:admin/show.php?nodelslider=1010");
		exit;
	}
}
#----- specialpost Delete
if (isset($_GET["specialpostid"])) 
{
	$specialpostid=$_GET["specialpostid"];
	$specialpost="DELETE FROM `takmobl`.`specialpost` WHERE `specialpost`.`id` =$specialpostid";
	$specialpostresult=mysql_query($specialpost);
	if ($specialpostresult) 
	{
		header("location:admin/show.php?okdelspecialpost=1010");
		exit;
	}
	else
	{
		header("location:admin/show.php?nodelspecialpost=1010");
		exit;
	}
}


?>