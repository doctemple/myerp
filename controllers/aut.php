<?php
session_start();
include("../core/config.php");
include_once('conn.php');

$message_ok=false;
$message_error='The system is not available';
if(isset($_POST['username'],$_POST['password'])){
    if($_POST['username']!=""){
        if($_POST['password']!=""){
            $username=$_POST['username'];
            $password=md5($_POST['password']);

            $sql = "Select * from user_tbl where fld_username='$username' and fld_password='$password'";
            $datas=fetch($conn,$sql);

            if(count($datas)>0){
                $message_ok=true;
                $_SESSION['aut']=true;
                $_SESSION['la']=$_POST['lang'];
                $_SESSION['uid']=$datas[0];
                $_SESSION['u']=$datas[1];
                $message_error='logged now';
            }else{
                $message_error='Login falied,please check your login account again\n';
            }
        }else{
            $message_error='Wrong password.';
        }
    }else{
        $message_error='username not existed.';
    }
} else{
    $message_error='All fields are required.';
}

$json=array('data' => $message_ok, 'message' =>$message_error);
echo json_encode($json);
?>