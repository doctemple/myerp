<?php
$datas = NavMenu_Add($conn);
echo json_encode($datas,JSON_UNESCAPED_UNICODE);
?>