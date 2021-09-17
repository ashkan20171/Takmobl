<?php include ("menu.php"); ?>

<div class="uploadBox">
<form method="post" enctype="multipart/form-data">
	<label>آدرس عکس</label>
	<input type="file" name="file">	
	<input type="submit" name="uploadbtn" value="آپلود">
</form>
</div><!-- uploadBox -->






<?php
	if (isset($_POST["uploadbtn"])) 
	{

echo "<div class=uploadBigbox>";		
		if (empty($_FILES["file"])) 
		{
			echo "<center>فایلی انتخاب نشده است</center>";
		}
		else
		{
			$filename="../thumb/".$_FILES["file"]["name"];
			$filesize=floor($_FILES["file"]["size"]/1024)." کیلوبایت";
			$filetype=$_FILES["file"]["type"];
			$filetmp=$_FILES["file"]["tmp_name"];

			if (is_uploaded_file($filetmp)) 
			{
				if(move_uploaded_file($filetmp, $filename))
				{
					echo "<p>فایل با موفقیت آپلود شد</p>";
					echo "<p>نام فایل : ".$filename."</p>";
					echo "<p>سایز فایل : ".$filesize."</p>";
					echo "<p>نوع فایل : ".$filetype."</p>";
					echo '<a href="'.$filename.'">ادرس فایل </a>';
				}
			}
			else
			{
				echo "<center>مشکل در آپلود</center>";
			}
		}
	}
	
?>

</div><!-- uploadBigbox -->


</body>
</html>