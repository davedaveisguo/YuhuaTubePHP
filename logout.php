<?php
// sesstion_start() in case session not exists
session_start();
session_destroy();
header("Location: index.php");

?>