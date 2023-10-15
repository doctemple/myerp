<?php
$id = isset($_REQUEST["id"])?$_REQUEST["id"]:1;
$fts = array('id', 'page_code', 'page_name', 'sub_code', 'menu_order', 'visit', 'page', 'icon', 'menu_type' );
$form_ft = array('Id', 'Page Code', 'Page Name', 'Sub Code', 'Menu Order', 'Visit', 'Page', 'Icon', 'Menu Type' );
$form_ty = array('id', 'input', 'input', 'input', 'input', 'visit', 'input', 'icon', 'dropdown' );
$filde_head = array("#",'Id', 'Page Code', 'Page Name', 'Sub Code', 'Menu Order', 'Visit', 'Page', 'Icon', 'Menu Type' ,"");
$field_type = array("no",'id', 'input', 'input', 'input', 'input', 'visit', 'input', 'icon', 'dropdown' ,"");
$main_menu = MainMenu_list($conn);
$MainMenuDetail = MainMenu_Detail($conn,$id);
?>