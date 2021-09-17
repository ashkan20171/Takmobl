	<div class="slider">
		    <!-- Insert to your webpage where you want to display the slider -->
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1337px;margin:0px auto 56px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">

            <?php
             $slider="SELECT * FROM  `slider` ORDER BY  `id` DESC ;";
             $sliderresult=mysql_query($slider);
             while($sliderfetch=mysql_fetch_assoc($sliderresult))
             {
                ?>

                <li><img src=<?php echo $sliderfetch["src"] ?> alt="طراحی فوق العاده"  title=<?php echo $sliderfetch["title"] ?> />
                </li>

               <?php
                }
                ?> 
        </div>
    </div>
    <!-- End of body section HTML codes -->

	</div><!-- slider -->