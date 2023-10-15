<?php
    if(isset($_REQUEST["ac"])){
        $ac = $_REQUEST["ac"];
    }else{
        $ac = "";
    }
    switch($ac){
        case "list" :     include_once("modules/main_menu/view/list.php"); break;
        case "add" :     include_once("modules/main_menu/view/add.php"); break;
        case "detail" :     include_once("modules/main_menu/view/detail.php"); break;
        case "edit" :     include_once("modules/main_menu/view/edit.php"); break;        
        case "delete" :     include_once("modules/main_menu/view/delete.php"); break;
        default : include_once("modules/main_menu/view/list.php"); break;
    }
?>