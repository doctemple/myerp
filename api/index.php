<?php
session_start();
extract($_REQUEST);
include("../core/config.php");
include_once('../controllers/conn.php');
if(isset($_REQUEST['m']) && isset($_REQUEST['a']) && $_REQUEST['m'] 
!= '' && $_REQUEST['a'] != ''){
    switch($m){
        case "$m" : 
            $fil = "{$m}/{$a}.php";
            if(is_file($fil)){
            include($fil); 
            }else{
                echo "No Action";
            }
            break;
        default : echo "Empty"; break;
    }
}else{
    echo "Not Rule";
}

?>