<?php
session_start();
header('Content-Type: Application/json; charset=utf8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');
include("../core/config.php");
include_once('../controllers/conn.php');


$datas[] = array('cid'=>'1','company'=>"ชัยเกียรติเจริญ จำกัด",'tel'=>"0846235122",'contract'=>"คุณ แก้ม");
$datas[] = array('cid'=>'2','company'=>"รุ่งกิจเจริญ จำกัด",'tel'=>"0996521414",'contract'=>"คุณ เอม");
$datas[] = array('cid'=>'3','company'=>"พรสว่าง จำกัด",'tel'=>"0928654322",'contract'=>"พี่จิต");
$datas[] = array('cid'=>'4','company'=>"ประเสริฐ จำกัด",'tel'=>"0832155133",'contract'=>"คุณ ต้อม");
$datas[] = array('cid'=>'5','company'=>"เอ็มอาร์ มอเตอร์ จำกัด",'tel'=>"0846241787",'contract'=>"ปณิตา");

echo json_encode($datas,JSON_UNESCAPED_UNICODE);


?>