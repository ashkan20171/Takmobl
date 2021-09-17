<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="fontAwsome/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="fontAwsome/css/font-awesome.min.css" />

    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->

	<title>تک مبل</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="allweb">
	<div class="menu">
		<ul>
		<?php
			 include ("config.php");
			 $mnu="SELECT * FROM  `menu` ;";
			 $mnuresult=mysql_query($mnu);
			 while($mnufetch=mysql_fetch_assoc($mnuresult))
			 {
				?>
			<li><a href=<?php echo $mnufetch["link"] ?>><?php echo $mnufetch["title"] ?></a></li>
				<?php
				}
				?>
		</ul>
	</div><!-- menu -->

	<div class="ads">
	<ul>
	<?php
			 include ("config.php");
			 $ads="SELECT * FROM  `topads` ORDER BY  `id` DESC ;";
			 $adsresult=mysql_query($ads);
			 while($adsfetch=mysql_fetch_assoc($adsresult))
			 {
				?>
		<li><a href=<?php echo $adsfetch["link"] ?> ><img src=<?php echo $adsfetch["src"] ?>></a></li>
		<?php
				}
				?>

	</ul>	
	</div><!-- ads -->