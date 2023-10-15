<?php
$datas = Suppliers_Add($conn);

echo json_encode($datas,JSON_UNESCAPED_UNICODE);
?>