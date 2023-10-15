<?php
$nav = get_navs($conn);
$nav_group = get_groups($conn);
DEFINE('_MENU',$nav);
if($_ROUTE!=""){
    $subcode =  get_subCode($conn,$_ROUTE);
  }else{
    $subcode ="";
  }
?>