<?php
$fld_subid = $_REQUEST['fld_subid']; $fld_subcode = $_REQUEST['fld_subcode']; $fld_subname = $_REQUEST['fld_subname']; $fld_subicon = $_REQUEST['fld_subicon']; 
$datas = NavMenu_Edit($conn);
echo json_encode($datas,JSON_UNESCAPED_UNICODE);
?>