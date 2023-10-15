<?php
$id = $_REQUEST["id"];
$datas = Suppliers_Detail($conn,$id);

echo json_encode($datas,JSON_UNESCAPED_UNICODE);
?>