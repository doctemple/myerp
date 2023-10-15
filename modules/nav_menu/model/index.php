<?php
function NavMenu_list($conn){
    $sql = "SELECT * FROM nav_menu";
    $datas = fetch($conn,$sql);
    return $datas;
    }
function NavMenu_Add($conn){
    $sql = "INSERT INTO nav_menu (fld_subid, fld_subcode, fld_subname, fld_subicon ) VALUES ('$fld_subid', '$fld_subcode', '$fld_subname', '$fld_subicon' )";
    $datas = Query($conn,$sql);
    return $datas;
}
function NavMenu_Detail($conn,$fld_subid){
    $sql = "SELECT * FROM nav_menu WHERE fld_subid = '$fld_subid' ORDER BY fld_subid ASC";
    $datas = fetch($conn,$sql);
    return $datas;
}
function NavMenu_Edit($conn,$fld_subid){
    $sql = "UPDATE nav_menu SET  fld_subid = '$fld_subid',  fld_subcode = '$fld_subcode',  fld_subname = '$fld_subname',  fld_subicon = '$fld_subicon'  WHERE fld_subid = '$fld_subid' ORDER BY fld_subid ASC";
    $datas = Query($conn,$sql);
    return $datas;
}
function NavMenu_Delete($conn,$fld_subid){
    $sql = "DELETE nav_menu WHERE fld_subid = '$fld_subid' ";
    $datas = fetch($conn,$sql);
    return $datas;
}
?>