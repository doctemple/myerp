<?php
$datas = Companies_Edit($conn);
echo json_encode($datas,JSON_UNESCAPED_UNICODE);
?>