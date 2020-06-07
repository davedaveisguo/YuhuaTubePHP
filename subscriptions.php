<?php
require_once("includes/header.php"); 
require_once("includes/classes/SubscriptionsProvider.php"); 

if(!User::isLoggedIn())
{
    header("Location: signIn.php");
}
$subscriptionProvider= new SubscriptionsProvider($con, $userLoggedInObj);
$videos=$subscriptionProvider->getVideos();

$videoGrid=new VideoGrid($con, $userLoggedInObj);

?>

<div class="largeVideoGridContainer">
    <?php
        if(sizeof($videos)>0)
        {
            echo $videoGrid->createLarge($videos,"New from your subscriptions", false);
        }else
        {
            echo "No videos to show";
        }



    ?>




</div>