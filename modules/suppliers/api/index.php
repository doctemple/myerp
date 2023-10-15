<?php
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
?>