<?php 
session_start();
//error_reporting(0);
//mysqli_report(MYSQLI_REPORT_OFF);
error_reporting(E_ALL);
if (STRPOS($_SERVER['QUERY_STRING'], '&') !== false) {
    $_PARAM = EXPLODE('&',$_SERVER['QUERY_STRING']);
    $_ROUTE = $_PARAM[0];
}else{
    $_PARAM = $_SERVER['QUERY_STRING'];
    $_ROUTE = $_PARAM; 
}
DEFINE('_PARAM',$_PARAM);
DEFINE('_ROUTE',$_ROUTE);
DEFINE('_PATH',dirname(__FILE__));
DEFINE('_LAST',date('d.m.Y H:i:s',FILEMTIME(_PATH."/.git")));
$_GLOBAL['pn']="page_name";
$_GLOBAL['pp']="page";
$_GLOBAL['pc']="page_code";
$_GLOBAL['sc']="sub_code";
include(_PATH."/core/start.php"); // Main Layout   
if(isset($_SESSION['LA'])){   
    $_SESSION['LA']="TH";
}
if(isset($_ROUTE) && $_ROUTE!=""){
    $modules = @get_page($conn,$_ROUTE);
    if($modules){
    $module = trim($modules[$_GLOBAL['pp']]);   
    }else{
        $module = "";
    }
    if($module!=""){
        $subname = @get_subName($conn,$modules[$_GLOBAL['sc']]);
        if($subname){
            echo breadcrumb($modules[$_GLOBAL['pn']],$subname,$modules[$_GLOBAL['pn']]);
        }else{
            echo breadcrumb($modules[$_GLOBAL['pn']],$modules[$_GLOBAL['pn']]);
        }

        include(_PATH."/modules/{$module}/index.php");

    }else{
        include(_PATH."/modules/pagenot/index.php");
    }

}else{
    if(isset($_SESSION['aut']) && $_SESSION['aut']==true){
        include(_PATH."/modules/dashboard/index.php"); // Page Layout
    }else{          
        include(_PATH."/modules/login/index.php"); // Single Page 
    }
}

include(_PATH."/core/end.php");
?>