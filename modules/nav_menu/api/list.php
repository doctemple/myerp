<?php
$datas = NavMenu_List($conn);
echo json_encode($datas,JSON_UNESCAPED_UNICODE);
?>