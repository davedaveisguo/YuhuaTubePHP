<?php
require_once("../includes/config.php"); 
require_once("../includes/classes/User.php"); 
require_once("../includes/classes/Comment.php"); 


$username=$_SESSION["userLoggedIn"];
$videoId=$_POST["videoId"];
$commentId=$_POST["commentId"];

$userloggedInObj= new User($con,$username);
$comment=new Comment($con, $commentId, $userloggedInObj, $videoId);


echo $comment->like();

?>