<?php include ("header.php"); ?>
<?php include ("slider.php"); ?>
<?php include ("specialPost.php"); ?>
<?php include ("func/func.php"); ?>

<?php
$posrsql="SELECT * FROM  `post` ORDER BY  `id` DESC ;";
$postquery=mysql_query($posrsql);
while($postfetch=mysql_fetch_assoc($postquery))
{
?>

    <div class="big-content">
        <div class="big-content-thumb">
            <img src=<?php echo $postfetch["src"]; ?>>
        </div><!-- big-content-thumb -->
            <div class="big-content-title">
                <p><?php echo $postfetch["title"]; ?></p>
            </div><!-- big-content-title -->

            <div class="big-content-txt">
                <p><?php echo post_content($postfetch["content"]); ?></p>
            </div><!-- big-content-txt -->
            <div class="big-content-footer">
                <a href=<?php echo "readmore.php?postid=$postfetch[id]" ?> >ادامه مطلب...</a>
            </div><!-- big-content-footer -->
    </div><!-- big-content -->

<?php
}
?>


<?php include ("footer.php"); ?>
  
</div><!-- allweb -->
</body>
</html>