<?php
include ('config-save.php');

$config = new ConfigFileManager('./configs/config.ini');  //opening file config.ini from configs directory  

//echo $config->DB_NAME;  //read  "Title" value which is equal to  "My App"  

$config->DB_PASS = "hellodude";  //changing value of "Title"  

echo $config->DB_PASS;

$config->save();  //save changes to config.ini easily
?>