    <div class="content-wrapp">

<?php
$i=0;
$specialposrsql="SELECT * FROM  `specialpost` ORDER BY  `id` DESC ;";
$specialpostquery=mysql_query($specialposrsql);
while($specialpostfetch=mysql_fetch_assoc($specialpostquery))
{
?>
        <div class="content">
                <div class="content-title">
                        <p><?php echo $specialpostfetch["title"]; ?></p>
                </div><!-- content-title -->
                <div class="content-thumb">
                        <img src=<?php echo $specialpostfetch["src"]; ?> >
                </div><!-- content-thumb -->
                <div class="content-txt">
                    <p><?php echo $specialpostfetch["content"]; ?></p>
                </div><!-- content-txt -->
        </div><!-- content -->
<?php
    $i++;
    if($i>=3)
    {
        break;
    }
}
?>

    </div><!-- content-wrapp -->