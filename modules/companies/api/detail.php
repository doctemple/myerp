<?php
$datas = Companies_Detail($conn);
echo json_encode($datas,JSON_UNESCAPED_UNICODE);
?>