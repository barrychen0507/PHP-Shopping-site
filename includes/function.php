<?php
//error_reporting(0);
require ('class.php');
function config_save($config_name, $config_value, $file){
    $config = new ConfigFileManager($file);  //opening file config.ini from configs directory  
    //echo $config->DB_NAME;  //read  "Title" value which is equal to  "My App"  
    $config->$config_name = $config_value;  //changing value of "Title"  
    echo $config->$config_name;
    $config->save();  //save changes to config.ini easily
}