<?php
//error_reporting(0);
include('includes/function.php');
session_start();
echo "This is the home page, which I have not yet design yet.<br>";
config_save('DB_NAME', 'THISISATEST', 'includes/configs/config.ini');
?>
