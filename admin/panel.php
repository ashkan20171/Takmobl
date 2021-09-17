<?php include ("menu.php"); ?>
<?php
if (!isset($_COOKIE["admin"])) {
	header("location:../index.php");
	exit;
}
?>
	<div class="wellcomadmin">
		<p>ادمین گرامی به پنل مدیریت وبسایت خوش آمدید</p>
	</div><!-- wellcomadmin -->


	<div class="lastpostbox">
		<div class="lastpostTitle">
			<p>آخرین پست های وبسایت</p>
		</div><!-- lastpostTitle -->
			<ul>
				<li><a href="#">بهترین طرح و رنگ برای تمامی سلایق</a></li>
				<li><a href="#">بهترین طرح و رنگ برای تمامی سلایق</a></li>
				<li><a href="#">بهترین طرح و رنگ برای تمامی سلایق</a></li>
				<li><a href="#">بهترین طرح و رنگ برای تمامی سلایق</a></li>
				<li><a href="#">بهترین طرح و رنگ برای تمامی سلایق</a></li>
				<li><a href="#">بهترین طرح و رنگ برای تمامی سلایق</a></li>
				<li><a href="#">بهترین طرح و رنگ برای تمامی سلایق</a></li>
				<li><a href="#">بهترین طرح و رنگ برای تمامی سلایق</a></li>
			</ul>
	</div><!-- lastpostbox -->

	<div class="admin">
		<div class="lastpostTitle">
			<p>اطلاعات مدیر وبسایت</p>
		</div><!-- lastpostTitle -->
			<div class="adminImg">
				<img src="../images/post2.jpg">
			</div><!-- adminImg -->
				<div class="adminPropertis">
					<ul>
						<li><p>نام : اشکان</p></li>
						<li><p>نام خانوادگی : مطاعی</p></li>
						<li><p>سن : 29 سال</p></li>
						<li><p>نام کاربری : ashkan</p></li>
						<li><p>رمز عبور : ashkan2019</p></li>
					</ul>
				</div><!-- adminPropertis -->
	</div><!-- admin -->

</body>
</html>