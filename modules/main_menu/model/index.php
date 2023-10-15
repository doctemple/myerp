<?php
function MainMenu_list($conn){
    $sql = "SELECT * FROM main_menu";
    $datas = fetch($conn,$sql);
    return $datas;
    }
function MainMenu_Add($conn){
    $sql = "INSERT INTO main_menu (id, page_code, page_name, sub_code, menu_order, visit, page, icon, menu_type ) VALUES ('$id', '$page_code', '$page_name', '$sub_code', '$menu_order', '$visit', '$page', '$icon', '$menu_type' )";
    $datas = Query($conn,$sql);
    return $datas;
}
function MainMenu_Detail($conn,$id){
    $sql = "SELECT * FROM main_menu WHERE id = '$id' ORDER BY id ASC";
    $datas = fetch($conn,$sql);
    return $datas[0];
}
function MainMenu_Edit($conn,$id){
    $sql = "UPDATE main_menu SET  id = '$id',  page_code = '$page_code',  page_name = '$page_name',  sub_code = '$sub_code',  menu_order = '$menu_order',  visit = '$visit',  page = '$page',  icon = '$icon',  menu_type = '$menu_type'  WHERE id = '$id' ORDER BY id ASC";
    $datas = Query($conn,$sql);
    return $datas;
}
function MainMenu_Delete($conn,$id){
    $sql = "DELETE main_menu WHERE id = '$id' ";
    $datas = fetch($conn,$sql);
    return $datas;
}
?>