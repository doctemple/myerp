<?php
function Roles_list($conn){
    $sql = "SELECT * FROM roles";
    $datas = fetch($conn,$sql);
    return $datas;
    }
?>