<?php

$config['md'] = $md?$md:$_REQUEST['module'];
$config['tab'] = 'api';
$config['fs'] = 'index';
$config['code'] = '<?php
session_start();
header("Content-Type: Application/json; charset=utf8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");
include_once("../../../core/config.php");
include_once("../../../controllers/conn.php");
include_once("../../../core/function.php");
include_once("../model/index.php");

if(isset($_REQUEST["ac"])){
    switch($_REQUEST["ac"]){
        case "list" :     include_once("list.php"); break;
        case "add" :     include_once("add.php"); break;
        case "detail" :     include_once("detail.php"); break;
        case "delete" :     include_once("delete.php"); break;
        default : include_once("list.php"); break;
    }
}
?>';

$config['file_src'] = "modules/".$md."/{$config['tab']}/{$config['fs']}.php";


echo PreOpen("Code");  
MakeAICode($config);
SaveToFile("Save to file",$config['file_src'],$config['code'],$md,$config['tab'],$config['fs']);
echo PreClose(); 

echo bo($config['file_src']);
MakeAIFile($config);
echo bc();

?>  