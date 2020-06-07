<?php  require_once("includes/header.php"); ?>

<div class="videoSection">
     <?php

               $subsriptionsProvider= new SubscriptionsProvider($con,(User::isLoggedIn())? $userLoggedInObj: null);
               $subsriptionVideos= (User::isLoggedIn())? $subsriptionsProvider->getVideos(): null;


               $videoGrid= new VideoGrid($con, (User::isLoggedIn())? $userLoggedInObj: null);
               if(User::isLoggedIn() && sizeof($subsriptionVideos)>0)
                    {
                    echo $videoGrid->create($subsriptionVideos,"Subscriptions",false);  
                     }
               
               echo $videoGrid->create(null,"Recommended",false);  

     ?>

</div>

        
<?php  require_once("includes/footer.php"); ?>