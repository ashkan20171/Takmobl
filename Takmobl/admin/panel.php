<?php include ("menu.php"); ?>
<?php
if (!isset($_COOKIE["admin"])) {
	header("location:../index.php");
	exit;
}
?>
	<div class="wellcomadmin">
		<p><?php echo $_COOKIE["admin"]; ?> گرامی به پنل مدیریت وبسایت خوش آمدید</p>
	</div><!-- wellcomadmin -->


	<div class="lastpostbox">
		<div class="lastpostTitle">
			<p>آخرین پست های وبسایت</p>
		</div><!-- lastpostTitle -->
			<ul>
<?php
$i=0;
$post="SELECT * FROM  `post` ORDER BY  `id` DESC ;";
$postresult=mysql_query($post);
while($postfetch=mysql_fetch_assoc($postresult))
{
?>			
		<li><a href=<?php echo "../readmore.php?postid=$postfetch[id]" ?>><?php echo $postfetch["title"]; ?></a></li>
<?php
    $i++;
    if($i>=3)
    {
        break;
    }
}
?>				
			</ul>
	</div><!-- lastpostbox -->

	<div class="admin">
		<div class="lastpostTitle">
			<p>اطلاعات مدیر وبسایت</p>
		</div><!-- lastpostTitle -->
		<?php
		$adminid=$_GET["adminid"];
			$admin="select * from `takmobl`.`admin` where id=$adminid;";
			$adminresult=mysql_query($admin);
			
			if($adminresult)
			{
				$adminfetch=mysql_fetch_assoc($adminresult);
		?>
			<div class="adminImg">
				<img src=<?php echo $adminfetch["img"]; ?>>
			</div><!-- adminImg -->
				<div class="adminPropertis">
					<ul>
						<li><p>نام : <?php echo $adminfetch["fname"]; ?></p></li>
						<li><p>نام خانوادگی : <?php echo $adminfetch["lname"]; ?></p></li>
						<li><p>سن : <?php echo $adminfetch["age"]; ?></p></li>
						<li><p>نام کاربری : <?php echo $adminfetch["username"]; ?></p></li>
						<li><p>رمز عبور : <?php echo $adminfetch["password"]; ?></p></li>
					</ul>
					<?php
				}
				?>
				</div><!-- adminPropertis -->
	</div><!-- admin -->

</body>
</html>