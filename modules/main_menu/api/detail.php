<?php
$id = $_REQUEST["id"];
$datas = MainMenu_Detail($conn,$id);
echo json_encode($datas,JSON_UNESCAPED_UNICODE);
?>