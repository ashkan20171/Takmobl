<?php include ("menu.php"); ?>
<?php
if (!isset($_COOKIE["admin"])) {
	header("location:../index.php");
	exit;
}
?>
	<div class="settBox">
		<div class="lastpostTitle">
			<p>تنظیمات اسلایدر</p>

			<?php
			if(isset($_GET["emptyslider"]))
			{
				echo "<center><font color=red>تمام فیلد ها باید پر باشد</font></center>";
			}
			if(isset($_GET["errorslider"]))
			{
				echo "<center><font color=red>مشکل در ارسال اطلاعات</font></center>";
			}
			if(isset($_GET["okslider"]))
			{
				echo "<center><font color=green>اطلاعات با موفقیت ارسال شد</font></center>";
			}
			?>

		</div><!-- lastpostTitle -->
			<form method="post" action="../check.php">
				<label>آدرس عکس</label>
				<input type="text" name="sliderimg">
				<label>عنوان عکس</label>
				<input type="text" name="slidertitle">
				<input type="submit" name="sliderbtn" value="ارسال اطلاعات">
			</form>
			<a href="upload.php" class="uploadlink">آپلود تصویر شاخص</a>
	</div><!-- settBox -->

	<div class="settBox">
		<div class="lastpostTitle">
			<p>تنظیمات تبلیغات پایینی</p>
		</div><!-- lastpostTitle -->

		<?php
			if(isset($_GET["emptybtmads"]))
			{
				echo "<center><font color=red>تمام فیلد ها باید پر باشد</font></center>";
			}
			if(isset($_GET["errorbtmads"]))
			{
				echo "<center><font color=red>مشکل در ارسال اطلاعات</font></center>";
			}
			if(isset($_GET["okbtmads"]))
			{
				echo "<center><font color=green>اطلاعات با موفقیت ارسال شد</font></center>";
			}
		?>

			<form method="post" action="../check.php">
				<label>آدرس عکس</label>
				<input type="text" name="adsimg">
				<label>لینک عکس</label>
				<input type="text" name="adslink">
				<input type="submit" name="btmAdsbtn" value="ارسال اطلاعات">
			</form>
			<a href="upload.php" class="uploadlink">آپلود تصویر شاخص</a>
	</div><!-- settBox -->

	<div class="settBox">
		<div class="lastpostTitle">
			<p>تنظیمات تبلیغات بالایی</p>
		</div><!-- lastpostTitle -->

		<?php
			if(isset($_GET["emptytopads"]))
			{
				echo "<center><font color=red>تمام فیلد ها باید پر باشد</font></center>";
			}
			if(isset($_GET["errortopads"]))
			{
				echo "<center><font color=red>مشکل در ارسال اطلاعات</font></center>";
			}
			if(isset($_GET["oktopads"]))
			{
				echo "<center><font color=green>اطلاعات با موفقیت ارسال شد</font></center>";
			}
		?>

			<form method="post" action="../check.php">
				<label>آدرس عکس</label>
				<input type="text" name="adsimg">
				<label>لینک عکس</label>
				<input type="text" name="adslink">
				<input type="submit" name="topadsbtn" value="ارسال اطلاعات">
			</form>
			<a href="upload.php" class="uploadlink">آپلود تصویر شاخص</a>
	</div><!-- settBox -->

	<div class="settBox">
		<div class="lastpostTitle">
			<p>تنظیمات منوی بالایی</p>
		</div><!-- lastpostTitle -->
		<?php
			if(isset($_GET["emptytopmnu"]))
			{
				echo "<center><font color=red>تمام فیلد ها باید پر باشد</font></center>";
			}
			if(isset($_GET["errortopmnu"]))
			{
				echo "<center><font color=red>مشکل در ارسال اطلاعات</font></center>";
			}
			if(isset($_GET["oktopmnu"]))
			{
				echo "<center><font color=green>اطلاعات با موفقیت ارسال شد</font></center>";
			}
		?>
			<form method="post" action="../check.php">
				<label>عنوان</label>
				<input type="text" name="topmnutitle">
				<label>لینک</label>
				<input type="text" name="topmnulink">
				<input type="submit" name="topmnubtn" value="ارسال اطلاعات">
			</form>
	</div><!-- settBox -->

</body>
</html>