<?php 

require_once("includes/config.php"); 
require_once("includes/classes/ButtonProvider.php"); 
require_once("includes/classes/User.php"); 
require_once("includes/classes/Video.php"); 
require_once("includes/classes/VideoGrid.php");
require_once("includes/classes/VideoGridItem.php");  
require_once("includes/classes/SubscriptionsProvider.php");  
require_once("includes/classes/NavigationMenuProvider.php");  


// checked if user logged in
$usernameLoggedIn = User::isLoggedIn() ? $_SESSION["userLoggedIn"]: null;
$userLoggedInObj= new User($con, $usernameLoggedIn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>YuhuaTube</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link  rel="stylesheet" type="text/css" href="assets/css/style.css"></link>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/commonAction.js"></script>
    <script src="assets/js/userAction.js"></script>
</head>
<body>
        <div id="pageContainer">
                    <div id="mastHeadContainer"> 
                        <button class="navShowHide">
                        <img src="assets/images/icons/menu.png" alt="menulog">
                        </button>
                        <a href="index.php" class="logoContainer">
                            <img src="assets/images/icons/VideoTubeLogo.png" title="tubelogo" alt="Site logo">
                        </a>

                        <div class="searchBarContainer">
                            <form action="search.php"  method="GET">
                                <input type="text" class="searchBar" name="term" placeholder="Search....">
                                <button class="searchButton">
                                <img src="assets/images/icons/search.png" alt="searchlog">
                                </button>
                            </form>
                        </div>

                        <div class="rightIcons">
                            <a href="upload.php">
                                <img src="assets/images/icons/upload.png" class="upload">
                            </a>
                            <?php
                            echo ButtonProvider::createUserProfileNavigationButton($con,(User::isLoggedIn())? $userLoggedInObj->getUsername(): null);
                            ?>
                        </div>

                    </div>

                    <div id="sideNavContainer" style="display:none">    
                            <?php
                            
                                $navigationMenuProvider = new NavigationMenuProvider($con,$userLoggedInObj);
                                echo $navigationMenuProvider->create();
                            ?>
                    </div>


                    <div id="mainSectionContainer">
                        <div id="mainContentContainer">