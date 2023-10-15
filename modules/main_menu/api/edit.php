<?php
$id = $_REQUEST['id']; $page_code = $_REQUEST['page_code']; $page_name = $_REQUEST['page_name']; $sub_code = $_REQUEST['sub_code']; $menu_order = $_REQUEST['menu_order']; $visit = $_REQUEST['visit']; $page = $_REQUEST['page']; $icon = $_REQUEST['icon']; $menu_type = $_REQUEST['menu_type']; 
$datas = MainMenu_Edit($conn);
echo json_encode($datas,JSON_UNESCAPED_UNICODE);
?>