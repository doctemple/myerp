<?php
$datas = Companies_Add($conn);
echo json_encode($datas,JSON_UNESCAPED_UNICODE);
?>