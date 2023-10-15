<?php
$datas = Suppliers_List($conn);

echo json_encode($datas,JSON_UNESCAPED_UNICODE);
?>