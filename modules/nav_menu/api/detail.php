<?php
$id = $_REQUEST["id"];
$datas = NavMenu_Detail($conn,$id);
echo json_encode($datas,JSON_UNESCAPED_UNICODE);
?>