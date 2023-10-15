<?php 
DEFINE('_EXT',get_loaded_extensions());

if(in_array("mysqli",_EXT)){
  $_MYSQL = TRUE;
   
    $conn =@ new mysqli(_SYS['host'], _SYS['username'], _SYS['password'], _SYS['dbname']);

    if ($conn->connect_error) {
?>

<link rel="stylesheet" href="dist/fonts/icon.css">
  <div style="border-radius: 25px;
  border: 2px solid #FF0000;
  padding: 20px; 
  width: 300px;
  margin:auto;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  height: 150px; ">
<i class="material-icons" style="font-size: 54px;">troubleshoot</i><p>
<?php
          switch ($conn->connect_errno) {
            case 2002 : die("Database Server : "._SYS['host'].' <span style="color:#ff0000; ">Not Found.</span><br>Error Code :'.$conn->connect_errno); break;
            case 1045 : die('User or Password : <span style="color:#ff0000; ">is Incorrect.</span><br>Error Code :'.$conn->connect_errno); break;
            case 1049 : die('Database : '._SYS['dbname'].' <span style="color:#ff0000; ">Not Found</span><br>Error Code :'.$conn->connect_errno); break;
            default : echo 'Error Code :'.$conn->connect_errno; break;
          } 
?>
</div>
<?php

    } else {
      $conn-> set_charset("utf8");  
    }

}else{
  $_MYSQL = FALSE;
}

?>