<?php
//error_reporting(0);
require ('class.php');
function config_save($config_name, $config_value, $file){
    $config = new ConfigFileManager($file);  //opening file config.ini from configs directory  
    $config->$config_name = $config_value;  //changing value of "Title"  
    echo $config->$config_name; //echo the value after changing, this is not neccessary
    $config->save();  //save changes to config.ini easily
}