
<?php include ("header.php"); ?>
<?php include ("config.php"); ?>


<?php
$postid=$_GET["postid"];
$posrsql="SELECT * FROM  `post` WHERE `id`=$postid;";
$postquery=mysql_query($posrsql);
while($postfetch=mysql_fetch_assoc($postquery))
{
?>



    <div class="rm-big-content">
       <div class="rm-big-content-thumb">
        <img src=<?php echo $postfetch["src"]; ?>>
       </div><!-- rm-big-content-thumb -->
       <div class="rm-big-content-txt">
        <a href="#"><?php echo $postfetch["title"]; ?></a>
        <p><?php echo $postfetch["content"]; ?></p>
       </div><!-- rm-big-content-txt -->
    </div><!-- rm-big-content -->
<?php
}
?>
 
 <?php include ("footer.php"); ?>

 
</div><!-- allweb -->
</body>
</html>