  <div class="ads">
    <ul>
    <?php
             $ads="SELECT * FROM  `btmads` ORDER BY  `id` DESC ;";
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
    <div class="footer"> 
        <div class="footermnu">  
            <ul>
                <li><a href="#">خانه</a></li>
            <li><a href="#">تبلیغات</a></li>
            <li><a href="#">درباره ما</a></li>
            <li><a href="#">تماس با ما</a></li>   
            </ul> 
        </div><!-- footermnu -->
            <div class="socialpage">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                       <li><a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                </ul>
                <p>کلیه حقوق مادی و معنوی وبسایت متعلق به تک مبل می باشد.</p>
            </div><!-- socialpage -->

    </div><!-- footer -->
