<?php
$config['md'] = $md?$md:$_REQUEST['module'];
$config['tab'] = 'view';
$config['fs'] = 'index';
$config['code'] = '<?php

    if(isset($_REQUEST["ac"])){
        $ac = $_REQUEST["ac"];
    }else{
        $ac = "";
    }

    switch($ac){
        case "list" :     include_once("modules/'.$md.'/view/list.php"); break;
        case "add" :     include_once("modules/'.$md.'/view/add.php"); break;
        case "detail" :     include_once("modules/'.$md.'/view/detail.php"); break;
        case "edit" :     include_once("modules/'.$md.'/view/edit.php"); break;        
        case "delete" :     include_once("modules/'.$md.'/view/delete.php"); break;
        default : include_once("modules/'.$md.'/view/list.php"); break;
    }

?>';

$config['file_src'] = "modules/{$md}/{$config['tab']}/{$config['fs']}.php";

echo PreOpen("Code");  
echo MakeAICode($config);
SaveToFile("Save to file",$config['file_src'],$config['code'],$md,$config['tab'],$config['fs']);
echo PreClose(); 

echo bo($config['file_src']);
MakeAIFile($config);
echo bc();
?>    