<?php
session_start();
extract($_POST);
$_SESSION['aut']=true;
$_SESSION['la']=$lang;
$_SESSION['uid']=1;
$_SESSION['u']=$u;


header("location:../index.php");
?>