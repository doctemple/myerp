<?php 
include_once(_PATH.'/core/config.php');
include(_PATH.'/controllers/conn.php');
include_once(_PATH.'/core/function.php');
include_once(_PATH.'/languages/lang.php');
include_once(_PATH.'/controllers/script.php');
include(_PATH.'/components/com.php');
include_once(_PATH.'/models/main.php');
include_once(_PATH.'/controllers/main.php');

ECHO HTML5_OPEN();
?>
<div class="wrapper">
<?php

    if(isset($_SESSION['aut'])){ 
    include(_PATH.'/components/topbar.php');
    include(_PATH.'/components/panel-left.php');
    include(_PATH.'/components/page-open.php'); 
    }
    
if(isset($_SESSION['activity'])){
    Info($_SESSION['activity']);  
  }
?>